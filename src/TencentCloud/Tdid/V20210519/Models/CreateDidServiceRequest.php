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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDidService请求参数结构体
 *
 * @method string getConsortiumName() 获取联盟名称
 * @method void setConsortiumName(string $ConsortiumName) 设置联盟名称
 * @method integer getConsortiumId() 获取联盟ID
 * @method void setConsortiumId(integer $ConsortiumId) 设置联盟ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getAgencyName() 获取机构名称
 * @method void setAgencyName(string $AgencyName) 设置机构名称
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method string getGroupName() 获取群组名称
 * @method void setGroupName(string $GroupName) 设置群组名称
 */
class CreateDidServiceRequest extends AbstractModel
{
    /**
     * @var string 联盟名称
     */
    public $ConsortiumName;

    /**
     * @var integer 联盟ID
     */
    public $ConsortiumId;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 机构名称
     */
    public $AgencyName;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var string 群组名称
     */
    public $GroupName;

    /**
     * @param string $ConsortiumName 联盟名称
     * @param integer $ConsortiumId 联盟ID
     * @param integer $GroupId 群组ID
     * @param string $AgencyName 机构名称
     * @param string $AppName 应用名称
     * @param string $ClusterId 网络ID
     * @param string $GroupName 群组名称
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
        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AgencyName",$param) and $param["AgencyName"] !== null) {
            $this->AgencyName = $param["AgencyName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
