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
 * iOS加固信息

	InfoPListUrl  string `json:"InfoPListUrl"`  //info.plist的url，必须保证不用权限校验就可以下载
	InfoPListSize int64  `json:"InfoPListSize"` //info.plist文件的大小
	InfoPListMd5  string `json:"InfoPListMd5"`  //info.plist文件的md5
	BuildType     string `json:"BuildType"`     //release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
 *
 * @method string getInfoPListUrl() 获取info.plist的url，必须保证不用权限校验就可以下载
 * @method void setInfoPListUrl(string $InfoPListUrl) 设置info.plist的url，必须保证不用权限校验就可以下载
 * @method integer getInfoPListSize() 获取info.plist文件的大小
 * @method void setInfoPListSize(integer $InfoPListSize) 设置info.plist文件的大小
 * @method string getInfoPListMd5() 获取info.plist文件的md5
 * @method void setInfoPListMd5(string $InfoPListMd5) 设置info.plist文件的md5
 * @method string getBuildType() 获取release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
 * @method void setBuildType(string $BuildType) 设置release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
 */
class IOSInfo extends AbstractModel
{
    /**
     * @var string info.plist的url，必须保证不用权限校验就可以下载
     */
    public $InfoPListUrl;

    /**
     * @var integer info.plist文件的大小
     */
    public $InfoPListSize;

    /**
     * @var string info.plist文件的md5
     */
    public $InfoPListMd5;

    /**
     * @var string release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
     */
    public $BuildType;

    /**
     * @param string $InfoPListUrl info.plist的url，必须保证不用权限校验就可以下载
     * @param integer $InfoPListSize info.plist文件的大小
     * @param string $InfoPListMd5 info.plist文件的md5
     * @param string $BuildType release: 需要INFO-PLIST文件，会生成工具部署安装包，并带有license文件，绑定机器；nobind不需要INFO-PLIST文件，不绑定机器
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
        if (array_key_exists("InfoPListUrl",$param) and $param["InfoPListUrl"] !== null) {
            $this->InfoPListUrl = $param["InfoPListUrl"];
        }

        if (array_key_exists("InfoPListSize",$param) and $param["InfoPListSize"] !== null) {
            $this->InfoPListSize = $param["InfoPListSize"];
        }

        if (array_key_exists("InfoPListMd5",$param) and $param["InfoPListMd5"] !== null) {
            $this->InfoPListMd5 = $param["InfoPListMd5"];
        }

        if (array_key_exists("BuildType",$param) and $param["BuildType"] !== null) {
            $this->BuildType = $param["BuildType"];
        }
    }
}
