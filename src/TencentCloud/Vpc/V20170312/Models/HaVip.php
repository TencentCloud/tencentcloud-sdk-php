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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述 HAVIP 信息
 *
 * @method string getHaVipId() 获取<p><code>HAVIP</code>的<code>ID</code>，是<code>HAVIP</code>的唯一标识。</p>
 * @method void setHaVipId(string $HaVipId) 设置<p><code>HAVIP</code>的<code>ID</code>，是<code>HAVIP</code>的唯一标识。</p>
 * @method string getHaVipName() 获取<p><code>HAVIP</code>名称。</p>
 * @method void setHaVipName(string $HaVipName) 设置<p><code>HAVIP</code>名称。</p>
 * @method string getVip() 获取<p>虚拟IP地址。</p>
 * @method void setVip(string $Vip) 设置<p>虚拟IP地址。</p>
 * @method string getVpcId() 获取<p><code>HAVIP</code>所在私有网络<code>ID</code>。</p>
 * @method void setVpcId(string $VpcId) 设置<p><code>HAVIP</code>所在私有网络<code>ID</code>。</p>
 * @method string getSubnetId() 获取<p><code>HAVIP</code>所在子网<code>ID</code>。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p><code>HAVIP</code>所在子网<code>ID</code>。</p>
 * @method string getNetworkInterfaceId() 获取<p><code>HAVIP</code>关联弹性网卡<code>ID</code>。</p>
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置<p><code>HAVIP</code>关联弹性网卡<code>ID</code>。</p>
 * @method string getInstanceId() 获取<p>被绑定的实例<code>ID</code>。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>被绑定的实例<code>ID</code>。</p>
 * @method string getAddressIp() 获取<p>绑定<code>EIP</code>。</p>
 * @method void setAddressIp(string $AddressIp) 设置<p>绑定<code>EIP</code>。</p>
 * @method string getState() 获取<p>状态：</p><li><code>AVAILABLE</code>：运行中</li><li><code>UNBIND</code>：未绑定</li>
 * @method void setState(string $State) 设置<p>状态：</p><li><code>AVAILABLE</code>：运行中</li><li><code>UNBIND</code>：未绑定</li>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method string getBusiness() 获取<p>使用havip的业务标识。</p>
 * @method void setBusiness(string $Business) 设置<p>使用havip的业务标识。</p>
 * @method array getHaVipAssociationSet() 获取<p><code>HAVIP</code>的飘移范围。</p>
 * @method void setHaVipAssociationSet(array $HaVipAssociationSet) 设置<p><code>HAVIP</code>的飘移范围。</p>
 * @method boolean getCheckAssociate() 获取<p>是否开启<code>HAVIP</code>的漂移范围校验。</p>
 * @method void setCheckAssociate(boolean $CheckAssociate) 设置<p>是否开启<code>HAVIP</code>的漂移范围校验。</p>
 * @method string getCdcId() 获取<p>CDC实例ID。</p>
 * @method void setCdcId(string $CdcId) 设置<p>CDC实例ID。</p>
 * @method string getFlushedTime() 获取<p>HAVIP 刷新时间。该参数只作为出参数。以下场景会触发FlushedTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00</p>
 * @method void setFlushedTime(string $FlushedTime) 设置<p>HAVIP 刷新时间。该参数只作为出参数。以下场景会触发FlushedTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00</p>
 * @method array getTagSet() 获取<p>标签键值对。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对。</p>
 */
class HaVip extends AbstractModel
{
    /**
     * @var string <p><code>HAVIP</code>的<code>ID</code>，是<code>HAVIP</code>的唯一标识。</p>
     */
    public $HaVipId;

    /**
     * @var string <p><code>HAVIP</code>名称。</p>
     */
    public $HaVipName;

    /**
     * @var string <p>虚拟IP地址。</p>
     */
    public $Vip;

    /**
     * @var string <p><code>HAVIP</code>所在私有网络<code>ID</code>。</p>
     */
    public $VpcId;

    /**
     * @var string <p><code>HAVIP</code>所在子网<code>ID</code>。</p>
     */
    public $SubnetId;

    /**
     * @var string <p><code>HAVIP</code>关联弹性网卡<code>ID</code>。</p>
     */
    public $NetworkInterfaceId;

    /**
     * @var string <p>被绑定的实例<code>ID</code>。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>绑定<code>EIP</code>。</p>
     */
    public $AddressIp;

    /**
     * @var string <p>状态：</p><li><code>AVAILABLE</code>：运行中</li><li><code>UNBIND</code>：未绑定</li>
     */
    public $State;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>使用havip的业务标识。</p>
     */
    public $Business;

    /**
     * @var array <p><code>HAVIP</code>的飘移范围。</p>
     */
    public $HaVipAssociationSet;

    /**
     * @var boolean <p>是否开启<code>HAVIP</code>的漂移范围校验。</p>
     */
    public $CheckAssociate;

    /**
     * @var string <p>CDC实例ID。</p>
     */
    public $CdcId;

    /**
     * @var string <p>HAVIP 刷新时间。该参数只作为出参数。以下场景会触发FlushedTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00</p>
     */
    public $FlushedTime;

    /**
     * @var array <p>标签键值对。</p>
     */
    public $TagSet;

    /**
     * @param string $HaVipId <p><code>HAVIP</code>的<code>ID</code>，是<code>HAVIP</code>的唯一标识。</p>
     * @param string $HaVipName <p><code>HAVIP</code>名称。</p>
     * @param string $Vip <p>虚拟IP地址。</p>
     * @param string $VpcId <p><code>HAVIP</code>所在私有网络<code>ID</code>。</p>
     * @param string $SubnetId <p><code>HAVIP</code>所在子网<code>ID</code>。</p>
     * @param string $NetworkInterfaceId <p><code>HAVIP</code>关联弹性网卡<code>ID</code>。</p>
     * @param string $InstanceId <p>被绑定的实例<code>ID</code>。</p>
     * @param string $AddressIp <p>绑定<code>EIP</code>。</p>
     * @param string $State <p>状态：</p><li><code>AVAILABLE</code>：运行中</li><li><code>UNBIND</code>：未绑定</li>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param string $Business <p>使用havip的业务标识。</p>
     * @param array $HaVipAssociationSet <p><code>HAVIP</code>的飘移范围。</p>
     * @param boolean $CheckAssociate <p>是否开启<code>HAVIP</code>的漂移范围校验。</p>
     * @param string $CdcId <p>CDC实例ID。</p>
     * @param string $FlushedTime <p>HAVIP 刷新时间。该参数只作为出参数。以下场景会触发FlushedTime 被刷新：1）子机发出免费 ARP 触发 HAVIP 漂移；2）手动HAVIP解绑网卡; 没有更新时默认值：0000-00-00 00:00:00</p>
     * @param array $TagSet <p>标签键值对。</p>
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
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("HaVipAssociationSet",$param) and $param["HaVipAssociationSet"] !== null) {
            $this->HaVipAssociationSet = [];
            foreach ($param["HaVipAssociationSet"] as $key => $value){
                $obj = new HaVipAssociation();
                $obj->deserialize($value);
                array_push($this->HaVipAssociationSet, $obj);
            }
        }

        if (array_key_exists("CheckAssociate",$param) and $param["CheckAssociate"] !== null) {
            $this->CheckAssociate = $param["CheckAssociate"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("FlushedTime",$param) and $param["FlushedTime"] !== null) {
            $this->FlushedTime = $param["FlushedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
