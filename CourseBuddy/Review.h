//
//  Review.h
//  CourseBuddy
//
//  Created by Jake Byman on 11/15/15.
//  Copyright © 2015 Jake Byman. All rights reserved.
//

#ifndef Review_h
#define Review_h

#include <iostream>
#include <string>
#include <vector>

using namespace std;

class Review{
private:
    string name;
    float overallRating;
    float easiness;
    float usefulness;
    float amountOfWork;
public:
    Review(string, float, float, float);
    string getName();
    float getOverallRating();
    float getEasiness();
    float getUsefulness();
    float getAmountOfWork();
};

#endif
