//
//  Course.cpp
//  CourseBuddy
//
//  Created by Jake Byman on 11/15/15.
//  Copyright © 2015 Jake Byman. All rights reserved.
//

#include "Course.h"

Course::Course(string n){
    name = n;
}

string Course:: getName(){
    return name;
}

vector<Review> Course :: getReviews(){
    return reviews;
}

float Course :: getOverallRating(){
    float res = 0.0;
    for(int i = 0; i < reviews.size(); i++){
        res += reviews[i].getOverallRating();
    }
    return res / reviews.size();
}