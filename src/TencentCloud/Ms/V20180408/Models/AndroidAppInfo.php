<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道合作Android加固App信息
 *
 * @method string getAppMd5() 获取app文件的md5算法值，需要正确传递，在线加固必输。
例如linux环境下执行算法命令md5sum ：
#md5sum test.apk 
d40cc11e4bddd643ecdf29cde729a12b
 * @method void setAppMd5(string $AppMd5) 设置app文件的md5算法值，需要正确传递，在线加固必输。
例如linux环境下执行算法命令md5sum ：
#md5sum test.apk 
d40cc11e4bddd643ecdf29cde729a12b
 * @method integer getAppSize() 获取app的大小，非必输。
 * @method void setAppSize(integer $AppSize) 设置app的大小，非必输。
 * @method string getAppUrl() 获取app下载链接，在线加固必输。
 * @method void setAppUrl(string $AppUrl) 设置app下载链接，在线加固必输。
 * @method string getAppName() 获取app名称，非必输
 * @method void setAppName(string $AppName) 设置app名称，非必输
 * @method string getAppPkgName() 获取app的包名，本次操作的包名。
当Android是按年收费、免费试用加固时，在线加固和输出工具要求该字段必输，且与AndroidPlan.AppPkgName值相等。
 * @method void setAppPkgName(string $AppPkgName) 设置app的包名，本次操作的包名。
当Android是按年收费、免费试用加固时，在线加固和输出工具要求该字段必输，且与AndroidPlan.AppPkgName值相等。
 * @method string getAppFileName() 获取app的文件名，非必输。
 * @method void setAppFileName(string $AppFileName) 设置app的文件名，非必输。
 * @method string getAppVersion() 获取app版本号，非必输。
 * @method void setAppVersion(string $AppVersion) 设置app版本号，非必输。
 * @method string getAppType() 获取Android app的文件类型，本次加固操作的应用类型 。
Android在线加固和输出工具加固必输，其值需等于“apk”或“aab”，且与AndroidAppInfo.AppType值相等。
 * @method void setAppType(string $AppType) 设置Android app的文件类型，本次加固操作的应用类型 。
Android在线加固和输出工具加固必输，其值需等于“apk”或“aab”，且与AndroidAppInfo.AppType值相等。
 */
class AndroidAppInfo extends AbstractModel
{
    /**
     * @var string app文件的md5算法值，需要正确传递，在线加固必输。
例如linux环境下执行算法命令md5sum ：
#md5sum test.apk 
d40cc11e4bddd643ecdf29cde729a12b
     */
    public $AppMd5;

    /**
     * @var integer app的大小，非必输。
     */
    public $AppSize;

    /**
     * @var string app下载链接，在线加固必输。
     */
    public $AppUrl;

    /**
     * @var string app名称，非必输
     */
    public $AppName;

    /**
     * @var string app的包名，本次操作的包名。
当Android是按年收费、免费试用加固时，在线加固和输出工具要求该字段必输，且与AndroidPlan.AppPkgName值相等。
     */
    public $AppPkgName;

    /**
     * @var string app的文件名，非必输。
     */
    public $AppFileName;

    /**
     * @var string app版本号，非必输。
     */
    public $AppVersion;

    /**
     * @var string Android app的文件类型，本次加固操作的应用类型 。
Android在线加固和输出工具加固必输，其值需等于“apk”或“aab”，且与AndroidAppInfo.AppType值相等。
     */
    public $AppType;

    /**
     * @param string $AppMd5 app文件的md5算法值，需要正确传递，在线加固必输。
例如linux环境下执行算法命令md5sum ：
#md5sum test.apk 
d40cc11e4bddd643ecdf29cde729a12b
     * @param integer $AppSize app的大小，非必输。
     * @param string $AppUrl app下载链接，在线加固必输。
     * @param string $AppName app名称，非必输
     * @param string $AppPkgName app的包名，本次操作的包名。
当Android是按年收费、免费试用加固时，在线加固和输出工具要求该字段必输，且与AndroidPlan.AppPkgName值相等。
     * @param string $AppFileName app的文件名，非必输。
     * @param string $AppVersion app版本号，非必输。
     * @param string $AppType Android app的文件类型，本次加固操作的应用类型 。
Android在线加固和输出工具加固必输，其值需等于“apk”或“aab”，且与AndroidAppInfo.AppType值相等。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AppMd5",$param) and $param["AppMd5"] !== null) {
            $this->AppMd5 = $param["AppMd5"];
        }

        if (array_key_exists("AppSize",$param) and $param["AppSize"] !== null) {
            $this->AppSize = $param["AppSize"];
        }

        if (array_key_exists("AppUrl",$param) and $param["AppUrl"] !== null) {
            $this->AppUrl = $param["AppUrl"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }

        if (array_key_exists("AppFileName",$param) and $param["AppFileName"] !== null) {
            $this->AppFileName = $param["AppFileName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }
    }
}
