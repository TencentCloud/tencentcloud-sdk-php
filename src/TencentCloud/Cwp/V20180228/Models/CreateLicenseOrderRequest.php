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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLicenseOrder请求参数结构体
 *
 * @method array getTags() 获取标签数组, 空则表示不需要绑定标签
 * @method void setTags(array $Tags) 设置标签数组, 空则表示不需要绑定标签
 * @method integer getLicenseType() 获取授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
默认为0
 * @method void setLicenseType(integer $LicenseType) 设置授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
默认为0
 * @method integer getLicenseNum() 获取授权数量 , 需要购买的数量.
默认为1
 * @method void setLicenseNum(integer $LicenseNum) 设置授权数量 , 需要购买的数量.
默认为1
 * @method integer getRegionId() 获取购买订单地域,这里仅支持 1 广州,9 新加坡. 推荐选择广州. 新加坡地域为白名单用户购买.
默认为1
 * @method void setRegionId(integer $RegionId) 设置购买订单地域,这里仅支持 1 广州,9 新加坡. 推荐选择广州. 新加坡地域为白名单用户购买.
默认为1
 * @method integer getProjectId() 获取项目ID .
默认为0
 * @method void setProjectId(integer $ProjectId) 设置项目ID .
默认为0
 * @method integer getTimeSpan() 获取购买时间长度,默认1 , 可选值为1,2,3,4,5,6,7,8,9,10,11,12,24,36
该参数仅包年包月生效
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时间长度,默认1 , 可选值为1,2,3,4,5,6,7,8,9,10,11,12,24,36
该参数仅包年包月生效
 * @method boolean getAutoRenewFlag() 获取是否自动续费, 默认不自动续费.
该参数仅包年包月生效
 * @method void setAutoRenewFlag(boolean $AutoRenewFlag) 设置是否自动续费, 默认不自动续费.
该参数仅包年包月生效
 * @method string getAutoProtectOpenConfig() 获取该字段作废
 * @method void setAutoProtectOpenConfig(string $AutoProtectOpenConfig) 设置该字段作废
 * @method OrderModifyObject getModifyConfig() 获取变配参数
 * @method void setModifyConfig(OrderModifyObject $ModifyConfig) 设置变配参数
 */
class CreateLicenseOrderRequest extends AbstractModel
{
    /**
     * @var array 标签数组, 空则表示不需要绑定标签
     */
    public $Tags;

    /**
     * @var integer 授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
默认为0
     */
    public $LicenseType;

    /**
     * @var integer 授权数量 , 需要购买的数量.
默认为1
     */
    public $LicenseNum;

    /**
     * @var integer 购买订单地域,这里仅支持 1 广州,9 新加坡. 推荐选择广州. 新加坡地域为白名单用户购买.
默认为1
     */
    public $RegionId;

    /**
     * @var integer 项目ID .
默认为0
     */
    public $ProjectId;

    /**
     * @var integer 购买时间长度,默认1 , 可选值为1,2,3,4,5,6,7,8,9,10,11,12,24,36
该参数仅包年包月生效
     */
    public $TimeSpan;

    /**
     * @var boolean 是否自动续费, 默认不自动续费.
该参数仅包年包月生效
     */
    public $AutoRenewFlag;

    /**
     * @var string 该字段作废
     */
    public $AutoProtectOpenConfig;

    /**
     * @var OrderModifyObject 变配参数
     */
    public $ModifyConfig;

    /**
     * @param array $Tags 标签数组, 空则表示不需要绑定标签
     * @param integer $LicenseType 授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月
默认为0
     * @param integer $LicenseNum 授权数量 , 需要购买的数量.
默认为1
     * @param integer $RegionId 购买订单地域,这里仅支持 1 广州,9 新加坡. 推荐选择广州. 新加坡地域为白名单用户购买.
默认为1
     * @param integer $ProjectId 项目ID .
默认为0
     * @param integer $TimeSpan 购买时间长度,默认1 , 可选值为1,2,3,4,5,6,7,8,9,10,11,12,24,36
该参数仅包年包月生效
     * @param boolean $AutoRenewFlag 是否自动续费, 默认不自动续费.
该参数仅包年包月生效
     * @param string $AutoProtectOpenConfig 该字段作废
     * @param OrderModifyObject $ModifyConfig 变配参数
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("LicenseNum",$param) and $param["LicenseNum"] !== null) {
            $this->LicenseNum = $param["LicenseNum"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoProtectOpenConfig",$param) and $param["AutoProtectOpenConfig"] !== null) {
            $this->AutoProtectOpenConfig = $param["AutoProtectOpenConfig"];
        }

        if (array_key_exists("ModifyConfig",$param) and $param["ModifyConfig"] !== null) {
            $this->ModifyConfig = new OrderModifyObject();
            $this->ModifyConfig->deserialize($param["ModifyConfig"]);
        }
    }
}
