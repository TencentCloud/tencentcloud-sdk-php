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
 * 订阅实例信息
 *
 * @method string getSubscribeId() 获取<p>数据订阅的实例ID</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>数据订阅的实例ID</p>
 * @method string getSubscribeName() 获取<p>数据订阅实例的名称</p>
 * @method void setSubscribeName(string $SubscribeName) 设置<p>数据订阅实例的名称</p>
 * @method string getTopic() 获取<p>订阅实例发送数据的kafka topic</p>
 * @method void setTopic(string $Topic) 设置<p>订阅实例发送数据的kafka topic</p>
 * @method string getProduct() 获取<p>订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
 * @method void setProduct(string $Product) 设置<p>订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
 * @method string getInstanceId() 获取<p>订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。</p>
 * @method string getInstanceStatus() 获取<p>云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空</p>
 * @method string getStatus() 获取<p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng</p>
 * @method void setStatus(string $Status) 设置<p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng</p>
 * @method string getSubsStatus() 获取<p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
 * @method void setSubsStatus(string $SubsStatus) 设置<p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
 * @method string getModifyTime() 获取<p>上次修改时间，时间格式如：Y-m-d h:m:s</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>上次修改时间，时间格式如：Y-m-d h:m:s</p>
 * @method string getCreateTime() 获取<p>创建时间，时间格式如：Y-m-d h:m:s</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，时间格式如：Y-m-d h:m:s</p>
 * @method string getIsolateTime() 获取<p>隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
 * @method string getExpireTime() 获取<p>包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
 * @method string getOfflineTime() 获取<p>下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
 * @method void setOfflineTime(string $OfflineTime) 设置<p>下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
 * @method integer getPayType() 获取<p>计费方式，0 - 包年包月，1 - 按量计费</p>
 * @method void setPayType(integer $PayType) 设置<p>计费方式，0 - 包年包月，1 - 按量计费</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
 * @method string getRegion() 获取<p>数据订阅实例所属地域</p>
 * @method void setRegion(string $Region) 设置<p>数据订阅实例所属地域</p>
 * @method string getAccessType() 获取<p>接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)</p>
 * @method void setAccessType(string $AccessType) 设置<p>接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)</p>
 * @method array getEndpoints() 获取<p>数据库节点信息</p>
 * @method void setEndpoints(array $Endpoints) 设置<p>数据库节点信息</p>
 * @method string getSubscribeVersion() 获取<p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
 * @method void setSubscribeVersion(string $SubscribeVersion) 设置<p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
 * @method array getTags() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrors() 获取<p>任务报错信息，如果有的话。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrors(array $Errors) 设置<p>任务报错信息，如果有的话。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceClass() 获取<p>订阅实例规格</p>
 * @method void setInstanceClass(string $InstanceClass) 设置<p>订阅实例规格</p>
 * @method string getConsumerRoutePhase() 获取<p>新版订阅消费端路由阶段</p>
 * @method void setConsumerRoutePhase(string $ConsumerRoutePhase) 设置<p>新版订阅消费端路由阶段</p>
 */
class SubscribeInfo extends AbstractModel
{
    /**
     * @var string <p>数据订阅的实例ID</p>
     */
    public $SubscribeId;

    /**
     * @var string <p>数据订阅实例的名称</p>
     */
    public $SubscribeName;

    /**
     * @var string <p>订阅实例发送数据的kafka topic</p>
     */
    public $Topic;

    /**
     * @var string <p>订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
     */
    public $Product;

    /**
     * @var string <p>订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng</p>
     */
    public $Status;

    /**
     * @var string <p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
     */
    public $SubsStatus;

    /**
     * @var string <p>上次修改时间，时间格式如：Y-m-d h:m:s</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>创建时间，时间格式如：Y-m-d h:m:s</p>
     */
    public $CreateTime;

    /**
     * @var string <p>隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
     */
    public $IsolateTime;

    /**
     * @var string <p>包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
     */
    public $OfflineTime;

    /**
     * @var integer <p>计费方式，0 - 包年包月，1 - 按量计费</p>
     */
    public $PayType;

    /**
     * @var integer <p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>数据订阅实例所属地域</p>
     */
    public $Region;

    /**
     * @var string <p>接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)</p>
     */
    public $AccessType;

    /**
     * @var array <p>数据库节点信息</p>
     */
    public $Endpoints;

    /**
     * @var string <p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
     */
    public $SubscribeVersion;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array <p>任务报错信息，如果有的话。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errors;

    /**
     * @var string <p>订阅实例规格</p>
     */
    public $InstanceClass;

    /**
     * @var string <p>新版订阅消费端路由阶段</p>
     */
    public $ConsumerRoutePhase;

    /**
     * @param string $SubscribeId <p>数据订阅的实例ID</p>
     * @param string $SubscribeName <p>数据订阅实例的名称</p>
     * @param string $Topic <p>订阅实例发送数据的kafka topic</p>
     * @param string $Product <p>订阅实例的类型，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
     * @param string $InstanceId <p>订阅的数据库实例ID（如果订阅的是云数据库）如果实例不是腾讯云上的，此值为空。</p>
     * @param string $InstanceStatus <p>云数据库状态：running 运行中，isolated 已隔离，offline 已下线。如果不是云上，此值为空</p>
     * @param string $Status <p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining, 按量转包年包月中 post2PrePayIng</p>
     * @param string $SubsStatus <p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
     * @param string $ModifyTime <p>上次修改时间，时间格式如：Y-m-d h:m:s</p>
     * @param string $CreateTime <p>创建时间，时间格式如：Y-m-d h:m:s</p>
     * @param string $IsolateTime <p>隔离时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
     * @param string $ExpireTime <p>包年包月任务的到期时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
     * @param string $OfflineTime <p>下线时间，时间格式如：Y-m-d h:m:s。默认：0000-00-00 00:00:00</p>
     * @param integer $PayType <p>计费方式，0 - 包年包月，1 - 按量计费</p>
     * @param integer $AutoRenewFlag <p>自动续费标识。只有当 PayType=0，该值才有意义。枚举值：0-不自动续费，1-自动续费</p>
     * @param string $Region <p>数据订阅实例所属地域</p>
     * @param string $AccessType <p>接入方式。枚举值：extranet(公网) vpncloud(vpn接入) dcg(专线接入) ccn(云联网) cdb(云数据库) cvm(云主机自建) intranet(自研上云) vpc(私有网络vpc)</p>
     * @param array $Endpoints <p>数据库节点信息</p>
     * @param string $SubscribeVersion <p>数据订阅版本, 当前支持kafka和kafkaPro（专业版）</p>
     * @param array $Tags <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Errors <p>任务报错信息，如果有的话。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceClass <p>订阅实例规格</p>
     * @param string $ConsumerRoutePhase <p>新版订阅消费端路由阶段</p>
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new EndpointItem();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SubsErr();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("ConsumerRoutePhase",$param) and $param["ConsumerRoutePhase"] !== null) {
            $this->ConsumerRoutePhase = $param["ConsumerRoutePhase"];
        }
    }
}
