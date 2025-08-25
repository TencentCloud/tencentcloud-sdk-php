<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubscribe请求参数结构体
 *
 * @method string getProduct() 获取订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
 * @method void setProduct(string $Product) 设置订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
 * @method integer getPayType() 获取付费方式，枚举值：0-包年包月，1-按量计费
 * @method void setPayType(integer $PayType) 设置付费方式，枚举值：0-包年包月，1-按量计费
 * @method integer getDuration() 获取购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1
 * @method void setDuration(integer $Duration) 设置购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1
 * @method integer getAutoRenew() 获取是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。
 * @method void setAutoRenew(integer $AutoRenew) 设置是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。
 * @method integer getCount() 获取购买数量,默认为1，最大为10
 * @method void setCount(integer $Count) 设置购买数量,默认为1，最大为10
 * @method array getTags() 获取实例资源标签
 * @method void setTags(array $Tags) 设置实例资源标签
 * @method string getName() 获取任务名，自定义
 * @method void setName(string $Name) 设置任务名，自定义
 * @method string getInstanceClass() 获取订阅实例规格，当前仅支持small、medium、large
 * @method void setInstanceClass(string $InstanceClass) 设置订阅实例规格，当前仅支持small、medium、large
 */
class CreateSubscribeRequest extends AbstractModel
{
    /**
     * @var string 订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
     */
    public $Product;

    /**
     * @var integer 付费方式，枚举值：0-包年包月，1-按量计费
     */
    public $PayType;

    /**
     * @var integer 购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1
     */
    public $Duration;

    /**
     * @var integer 是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。
     */
    public $AutoRenew;

    /**
     * @var integer 购买数量,默认为1，最大为10
     */
    public $Count;

    /**
     * @var array 实例资源标签
     */
    public $Tags;

    /**
     * @var string 任务名，自定义
     */
    public $Name;

    /**
     * @var string 订阅实例规格，当前仅支持small、medium、large
     */
    public $InstanceClass;

    /**
     * @param string $Product 订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)
     * @param integer $PayType 付费方式，枚举值：0-包年包月，1-按量计费
     * @param integer $Duration 购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1
     * @param integer $AutoRenew 是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。
     * @param integer $Count 购买数量,默认为1，最大为10
     * @param array $Tags 实例资源标签
     * @param string $Name 任务名，自定义
     * @param string $InstanceClass 订阅实例规格，当前仅支持small、medium、large
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }
    }
}
