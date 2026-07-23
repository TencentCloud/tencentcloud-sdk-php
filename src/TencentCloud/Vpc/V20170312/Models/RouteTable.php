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
 * 路由表对象
 *
 * @method string getVpcId() 获取<p>VPC实例ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC实例ID。</p>
 * @method string getRouteTableId() 获取<p>路由表实例ID，例如：rtb-azd4dt1c。</p>
 * @method void setRouteTableId(string $RouteTableId) 设置<p>路由表实例ID，例如：rtb-azd4dt1c。</p>
 * @method string getRouteTableName() 获取<p>路由表名称。</p>
 * @method void setRouteTableName(string $RouteTableName) 设置<p>路由表名称。</p>
 * @method array getAssociationSet() 获取<p>路由表关联关系。</p>
 * @method void setAssociationSet(array $AssociationSet) 设置<p>路由表关联关系。</p>
 * @method array getRouteSet() 获取<p>IPv4路由策略集合。</p>
 * @method void setRouteSet(array $RouteSet) 设置<p>IPv4路由策略集合。</p>
 * @method boolean getMain() 获取<p>是否默认路由表。</p>
 * @method void setMain(boolean $Main) 设置<p>是否默认路由表。</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method array getTagSet() 获取<p>标签键值对。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对。</p>
 * @method array getLocalCidrForCcn() 获取<p>local路由是否发布云联网。</p>
 * @method void setLocalCidrForCcn(array $LocalCidrForCcn) 设置<p>local路由是否发布云联网。</p>
 */
class RouteTable extends AbstractModel
{
    /**
     * @var string <p>VPC实例ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>路由表实例ID，例如：rtb-azd4dt1c。</p>
     */
    public $RouteTableId;

    /**
     * @var string <p>路由表名称。</p>
     */
    public $RouteTableName;

    /**
     * @var array <p>路由表关联关系。</p>
     */
    public $AssociationSet;

    /**
     * @var array <p>IPv4路由策略集合。</p>
     */
    public $RouteSet;

    /**
     * @var boolean <p>是否默认路由表。</p>
     */
    public $Main;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var array <p>标签键值对。</p>
     */
    public $TagSet;

    /**
     * @var array <p>local路由是否发布云联网。</p>
     */
    public $LocalCidrForCcn;

    /**
     * @param string $VpcId <p>VPC实例ID。</p>
     * @param string $RouteTableId <p>路由表实例ID，例如：rtb-azd4dt1c。</p>
     * @param string $RouteTableName <p>路由表名称。</p>
     * @param array $AssociationSet <p>路由表关联关系。</p>
     * @param array $RouteSet <p>IPv4路由策略集合。</p>
     * @param boolean $Main <p>是否默认路由表。</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param array $TagSet <p>标签键值对。</p>
     * @param array $LocalCidrForCcn <p>local路由是否发布云联网。</p>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("AssociationSet",$param) and $param["AssociationSet"] !== null) {
            $this->AssociationSet = [];
            foreach ($param["AssociationSet"] as $key => $value){
                $obj = new RouteTableAssociation();
                $obj->deserialize($value);
                array_push($this->AssociationSet, $obj);
            }
        }

        if (array_key_exists("RouteSet",$param) and $param["RouteSet"] !== null) {
            $this->RouteSet = [];
            foreach ($param["RouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->RouteSet, $obj);
            }
        }

        if (array_key_exists("Main",$param) and $param["Main"] !== null) {
            $this->Main = $param["Main"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("LocalCidrForCcn",$param) and $param["LocalCidrForCcn"] !== null) {
            $this->LocalCidrForCcn = [];
            foreach ($param["LocalCidrForCcn"] as $key => $value){
                $obj = new CidrForCcn();
                $obj->deserialize($value);
                array_push($this->LocalCidrForCcn, $obj);
            }
        }
    }
}
