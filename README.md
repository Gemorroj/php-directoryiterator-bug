### PHP DirectoryIterator bug on Docker-win + Alpine Linux

Tested on Docker-win & online alpine linux (https://bellard.org/jslinux/vm.html?url=alpine-x86.cfg).
All fine on native windows/linux machine (Windows 10 / Centos 8 Stream).
And all fine on native Alpine linux 3.15.

#### Reproduce (windows + docker-win):
```
git clone https://github.com/Gemorroj/php-directoryiterator-bug.git
cd php-directoryiterator-bug
docker-compose up --build --remove-orphans --force-recreate -d
docker-compose exec php sh
php test.php
```

#### Problem:
DirectoryIterator returns only 1 file from `src/Repository`

Example output (`php test.php`):
```
We have problems!
DirectoryIterator returns 1 elements, scandir returns 40 elements
DirectoryIterator output:
WebsiteRepository.php

Scandir output:
.
..
AdminRepository.php
InStorePickupStoreConditionRepository.php
InStorePickupStoreRepository.php
LogApiRequestRepository.php
LogCarrierRequestRepository.php
LogDistanceRequestRepository.php
LogPlatformRequestRepository.php
LogSmartPackagingRepository.php
MergedShippingOptionRepository.php
OriginRepository.php
PackagingRuleRepository.php
RateShoppingCarrierPackageRepository.php
RateShoppingCarrierRepository.php
RateShoppingCarrierServiceRepository.php
RateShoppingRepository.php
ResetPasswordTokenRepository.php
ShippingAreaConditionRepository.php
ShippingAreaRepository.php
ShippingOnProductPageRepository.php
ShippingOptionRepository.php
ShippingRuleConditionRepository.php
ShippingRuleRepository.php
ShippingSegmentConditionRepository.php
ShippingSegmentRepository.php
SmartPackagingMappingRepository.php
StatisticsLabelRepository.php
StatisticsRateRepository.php
StatisticsTrackingRepository.php
TableRateMethodConditionRepository.php
TableRateMethodRepository.php
TableRateRepository.php
TimeSlotRepository.php
UniqueTrait.php
UserBillingFeatureRepository.php
UserBillingPlanRepository.php
UserFeaturesRepository.php
UserRepository.php
WebsiteRepository.php
```
