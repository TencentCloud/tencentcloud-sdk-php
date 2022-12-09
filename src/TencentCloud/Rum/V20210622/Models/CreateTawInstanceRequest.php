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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTawInstance请求参数结构体
 *
 * @method integer getAreaId() 获取片区Id，(至少大于0)
 * @method void setAreaId(integer $AreaId) 设置片区Id，(至少大于0)
 * @method integer getChargeType() 获取计费类型, (1=后付费)
 * @method void setChargeType(integer $ChargeType) 设置计费类型, (1=后付费)
 * @method integer getDataRetentionDays() 获取数据保存时间，(至少大于0)
 * @method void setDataRetentionDays(integer $DataRetentionDays) 设置数据保存时间，(至少大于0)
 * @method string getInstanceName() 获取实例名称，(最大长度不超过255字节)
 * @method void setInstanceName(string $InstanceName) 设置实例名称，(最大长度不超过255字节)
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getInstanceDesc() 获取实例描述，(最大长度不超过1024字节)
 * @method void setInstanceDesc(string $InstanceDesc) 设置实例描述，(最大长度不超过1024字节)
 * @method string getCountNum() 获取每天数据上报量
 * @method void setCountNum(string $CountNum) 设置每天数据上报量
 * @method string getPeriodRetain() 获取数据存储时长计费
 * @method void setPeriodRetain(string $PeriodRetain) 设置数据存储时长计费
 * @method string getBuyingChannel() 获取实例购买渠道("cdn" 等)
 * @method void setBuyingChannel(string $BuyingChannel) 设置实例购买渠道("cdn" 等)
 * @method integer getResourcePackageType() 获取预付费资源包类型(仅预付费需要)
 * @method void setResourcePackageType(integer $ResourcePackageType) 设置预付费资源包类型(仅预付费需要)
 * @method integer getResourcePackageNum() 获取预付费资源包数量(仅预付费需要)
 * @method void setResourcePackageNum(integer $ResourcePackageNum) 设置预付费资源包数量(仅预付费需要)
 */
class CreateTawInstanceRequest extends AbstractModel
{
    /**
     * @var integer 片区Id，(至少大于0)
     */
    public $AreaId;

    /**
     * @var integer 计费类型, (1=后付费)
     */
    public $ChargeType;

    /**
     * @var integer 数据保存时间，(至少大于0)
     */
    public $DataRetentionDays;

    /**
     * @var string 实例名称，(最大长度不超过255字节)
     */
    public $InstanceName;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 实例描述，(最大长度不超过1024字节)
     */
    public $InstanceDesc;

    /**
     * @var string 每天数据上报量
     */
    public $CountNum;

    /**
     * @var string 数据存储时长计费
     */
    public $PeriodRetain;

    /**
     * @var string 实例购买渠道("cdn" 等)
     */
    public $BuyingChannel;

    /**
     * @var integer 预付费资源包类型(仅预付费需要)
     */
    public $ResourcePackageType;

    /**
     * @var integer 预付费资源包数量(仅预付费需要)
     */
    public $ResourcePackageNum;

    /**
     * @param integer $AreaId 片区Id，(至少大于0)
     * @param integer $ChargeType 计费类型, (1=后付费)
     * @param integer $DataRetentionDays 数据保存时间，(至少大于0)
     * @param string $InstanceName 实例名称，(最大长度不超过255字节)
     * @param array $Tags 标签列表
     * @param string $InstanceDesc 实例描述，(最大长度不超过1024字节)
     * @param string $CountNum 每天数据上报量
     * @param string $PeriodRetain 数据存储时长计费
     * @param string $BuyingChannel 实例购买渠道("cdn" 等)
     * @param integer $ResourcePackageType 预付费资源包类型(仅预付费需要)
     * @param integer $ResourcePackageNum 预付费资源包数量(仅预付费需要)
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
        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("DataRetentionDays",$param) and $param["DataRetentionDays"] !== null) {
            $this->DataRetentionDays = $param["DataRetentionDays"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("CountNum",$param) and $param["CountNum"] !== null) {
            $this->CountNum = $param["CountNum"];
        }

        if (array_key_exists("PeriodRetain",$param) and $param["PeriodRetain"] !== null) {
            $this->PeriodRetain = $param["PeriodRetain"];
        }

        if (array_key_exists("BuyingChannel",$param) and $param["BuyingChannel"] !== null) {
            $this->BuyingChannel = $param["BuyingChannel"];
        }

        if (array_key_exists("ResourcePackageType",$param) and $param["ResourcePackageType"] !== null) {
            $this->ResourcePackageType = $param["ResourcePackageType"];
        }

        if (array_key_exists("ResourcePackageNum",$param) and $param["ResourcePackageNum"] !== null) {
            $this->ResourcePackageNum = $param["ResourcePackageNum"];
        }
    }
}
