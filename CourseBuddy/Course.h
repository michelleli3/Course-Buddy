//
//  Course.h
//  CourseBuddy
//
//  Created by Jake Byman on 11/15/15.
//  Copyright © 2015 Jake Byman. All rights reserved.
//

#ifndef Course_h
#define Course_h

#include <iostream>
#include <string>
#include <vector>
#include "Review.h"

using namespace std;

class Course{
private:
    string name;
    vector<Review> reviews;
public:
    Course(string);
    string getName();
    vector<Review> getReviews();
    float getOverallRating();
};

#endif /* Course_h */
