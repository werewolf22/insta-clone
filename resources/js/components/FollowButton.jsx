import React, { useState } from 'react';
import ReactDOM from 'react-dom/client';

function FollowButton({thisUserFollowed, followLink}) {
    const [thisUserFollowedValue, setThisUserFollowed] = useState(thisUserFollowed);
    function followUser(event){
        console.log(followLink);
        axios.post(followLink).then(function(result){
            
            if(result.data.attached.length == 0)setThisUserFollowed(false);
            else setThisUserFollowed(true);
        }).catch(function(error){
            if(error.response.status == '401') window.location = '/login'; 
        });
    }

    return (
            <button className="btn btn-primary" style={{height: "fit-content"}} onClick={followUser}>
                {thisUserFollowedValue? "Unfollow": "Follow"}
            </button> 
    );
}

// export  default FollowButton;
// console.log(document.getElementById('example'));
let followDivNode = document.getElementById('follow-div');
let thisUserFollowed = followDivNode.hasAttribute('data-this-user-followed');
let followLink = followDivNode.getAttribute('data-follow-link');

if (followDivNode) {
    const Index = ReactDOM.createRoot(followDivNode);

    Index.render(
        <React.StrictMode>
            <FollowButton thisUserFollowed={thisUserFollowed} followLink={followLink}/>
        </React.StrictMode>
    )
}
