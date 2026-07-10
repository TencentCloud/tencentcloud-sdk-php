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
 * @method string getProduct() 获取<p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
 * @method void setProduct(string $Product) 设置<p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
 * @method integer getPayType() 获取<p>付费方式，枚举值：0-包年包月，1-按量计费</p>
 * @method void setPayType(integer $PayType) 设置<p>付费方式，枚举值：0-包年包月，1-按量计费</p>
 * @method integer getDuration() 获取<p>购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1</p>
 * @method void setDuration(integer $Duration) 设置<p>购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1</p>
 * @method integer getAutoRenew() 获取<p>是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。</p>
 * @method integer getCount() 获取<p>购买数量,默认为1，最大为10</p>
 * @method void setCount(integer $Count) 设置<p>购买数量,默认为1，最大为10</p>
 * @method array getTags() 获取<p>实例资源标签</p>
 * @method void setTags(array $Tags) 设置<p>实例资源标签</p>
 * @method string getName() 获取<p>任务名，自定义</p>
 * @method void setName(string $Name) 设置<p>任务名，自定义</p>
 * @method string getSubscribeVersion() 获取<p>数据订阅版本，目前支持kafka和kafkaPro（专业版），如果不填，默认kafkaPro</p>
 * @method void setSubscribeVersion(string $SubscribeVersion) 设置<p>数据订阅版本，目前支持kafka和kafkaPro（专业版），如果不填，默认kafkaPro</p>
 * @method string getInstanceClass() 获取<p>订阅实例规格，当前仅支持small、medium、large</p>
 * @method void setInstanceClass(string $InstanceClass) 设置<p>订阅实例规格，当前仅支持small、medium、large</p>
 */
class CreateSubscribeRequest extends AbstractModel
{
    /**
     * @var string <p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
     */
    public $Product;

    /**
     * @var integer <p>付费方式，枚举值：0-包年包月，1-按量计费</p>
     */
    public $PayType;

    /**
     * @var integer <p>购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1</p>
     */
    public $Duration;

    /**
     * @var integer <p>是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。</p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>购买数量,默认为1，最大为10</p>
     */
    public $Count;

    /**
     * @var array <p>实例资源标签</p>
     */
    public $Tags;

    /**
     * @var string <p>任务名，自定义</p>
     */
    public $Name;

    /**
     * @var string <p>数据订阅版本，目前支持kafka和kafkaPro（专业版），如果不填，默认kafkaPro</p>
     */
    public $SubscribeVersion;

    /**
     * @var string <p>订阅实例规格，当前仅支持small、medium、large</p>
     */
    public $InstanceClass;

    /**
     * @param string $Product <p>订阅的数据库类型，目前支持 cynosdbmysql(tdsql-c mysql版),mariadb,mongodb,mysql,percona,tdpg(tdsql postgresql版),tdsqlpercona(tdsql mysql版)</p>
     * @param integer $PayType <p>付费方式，枚举值：0-包年包月，1-按量计费</p>
     * @param integer $Duration <p>购买时长。当 payType 为包年包月时，该项需要填，单位为月，最小值为 1，最大值为 120。不填默认1</p>
     * @param integer $AutoRenew <p>是否自动续费。当 payType 为包年包月时，该项需要填。枚举值：0-不自动续费，1-自动续费。默认不自动续费。按量计费设置该标识无效。</p>
     * @param integer $Count <p>购买数量,默认为1，最大为10</p>
     * @param array $Tags <p>实例资源标签</p>
     * @param string $Name <p>任务名，自定义</p>
     * @param string $SubscribeVersion <p>数据订阅版本，目前支持kafka和kafkaPro（专业版），如果不填，默认kafkaPro</p>
     * @param string $InstanceClass <p>订阅实例规格，当前仅支持small、medium、large</p>
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

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }
    }
}
