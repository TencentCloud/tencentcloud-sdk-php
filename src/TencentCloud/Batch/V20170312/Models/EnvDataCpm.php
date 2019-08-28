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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getZones() 获取黑石可用区列表。可通过黑石[DescribeRegions](https://cloud.tencent.com/document/api/386/33564)接口查询。目前仅支持一个可用区。
 * @method void setZones(array $Zones) 设置黑石可用区列表。可通过黑石[DescribeRegions](https://cloud.tencent.com/document/api/386/33564)接口查询。目前仅支持一个可用区。
 * @method array getComputeTypes() 获取黑石计算单元类型列表。如v3.c2.medium，更详细的ComputeType参考[黑石竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)。目前仅支持一个计算单元类型。
 * @method void setComputeTypes(array $ComputeTypes) 设置黑石计算单元类型列表。如v3.c2.medium，更详细的ComputeType参考[黑石竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)。目前仅支持一个计算单元类型。
 * @method integer getOsTypeId() 获取黑石操作系统类型ID。
 * @method void setOsTypeId(integer $OsTypeId) 设置黑石操作系统类型ID。
 * @method array getVirtualPrivateClouds() 获取黑石VPC列表，目前仅支持一个VPC。
 * @method void setVirtualPrivateClouds(array $VirtualPrivateClouds) 设置黑石VPC列表，目前仅支持一个VPC。
 * @method string getDeployType() 获取DeployType参数值为fast时，将选取黑石预部署机器发货，发货快。如果无此参数，则选取黑石常规机器发货。
 * @method void setDeployType(string $DeployType) 设置DeployType参数值为fast时，将选取黑石预部署机器发货，发货快。如果无此参数，则选取黑石常规机器发货。
 * @method string getSpotStrategy() 获取出价策略。默认取值为SpotAsPriceGo，表示出价方式为随市场价的策略。目前只可取值SpotAsPriceGo。
 * @method void setSpotStrategy(string $SpotStrategy) 设置出价策略。默认取值为SpotAsPriceGo，表示出价方式为随市场价的策略。目前只可取值SpotAsPriceGo。
 * @method string getPasswd() 获取设置黑石竞价实例密码。若不指定会生成随机密码，可到站内信中查看。
 * @method void setPasswd(string $Passwd) 设置设置黑石竞价实例密码。若不指定会生成随机密码，可到站内信中查看。
 */

/**
 *黑石计算环境数据
 */
class EnvDataCpm extends AbstractModel
{
    /**
     * @var array 黑石可用区列表。可通过黑石[DescribeRegions](https://cloud.tencent.com/document/api/386/33564)接口查询。目前仅支持一个可用区。
     */
    public $Zones;

    /**
     * @var array 黑石计算单元类型列表。如v3.c2.medium，更详细的ComputeType参考[黑石竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)。目前仅支持一个计算单元类型。
     */
    public $ComputeTypes;

    /**
     * @var integer 黑石操作系统类型ID。
     */
    public $OsTypeId;

    /**
     * @var array 黑石VPC列表，目前仅支持一个VPC。
     */
    public $VirtualPrivateClouds;

    /**
     * @var string DeployType参数值为fast时，将选取黑石预部署机器发货，发货快。如果无此参数，则选取黑石常规机器发货。
     */
    public $DeployType;

    /**
     * @var string 出价策略。默认取值为SpotAsPriceGo，表示出价方式为随市场价的策略。目前只可取值SpotAsPriceGo。
     */
    public $SpotStrategy;

    /**
     * @var string 设置黑石竞价实例密码。若不指定会生成随机密码，可到站内信中查看。
     */
    public $Passwd;
    /**
     * @param array $Zones 黑石可用区列表。可通过黑石[DescribeRegions](https://cloud.tencent.com/document/api/386/33564)接口查询。目前仅支持一个可用区。
     * @param array $ComputeTypes 黑石计算单元类型列表。如v3.c2.medium，更详细的ComputeType参考[黑石竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)。目前仅支持一个计算单元类型。
     * @param integer $OsTypeId 黑石操作系统类型ID。
     * @param array $VirtualPrivateClouds 黑石VPC列表，目前仅支持一个VPC。
     * @param string $DeployType DeployType参数值为fast时，将选取黑石预部署机器发货，发货快。如果无此参数，则选取黑石常规机器发货。
     * @param string $SpotStrategy 出价策略。默认取值为SpotAsPriceGo，表示出价方式为随市场价的策略。目前只可取值SpotAsPriceGo。
     * @param string $Passwd 设置黑石竞价实例密码。若不指定会生成随机密码，可到站内信中查看。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("ComputeTypes",$param) and $param["ComputeTypes"] !== null) {
            $this->ComputeTypes = $param["ComputeTypes"];
        }

        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }

        if (array_key_exists("VirtualPrivateClouds",$param) and $param["VirtualPrivateClouds"] !== null) {
            $this->VirtualPrivateClouds = [];
            foreach ($param["VirtualPrivateClouds"] as $key => $value){
                $obj = new CpmVirtualPrivateCloud();
                $obj->deserialize($value);
                array_push($this->VirtualPrivateClouds, $obj);
            }
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("SpotStrategy",$param) and $param["SpotStrategy"] !== null) {
            $this->SpotStrategy = $param["SpotStrategy"];
        }

        if (array_key_exists("Passwd",$param) and $param["Passwd"] !== null) {
            $this->Passwd = $param["Passwd"];
        }
    }
}
