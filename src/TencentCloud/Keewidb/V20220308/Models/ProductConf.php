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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品规格信息
 *
 * @method integer getType() 获取产品类型，13-KeewiDB标准架构，14-KeewiDB集群架构
 * @method void setType(integer $Type) 设置产品类型，13-KeewiDB标准架构，14-KeewiDB集群架构
 * @method string getTypeName() 获取KeewiDB标准架构，KeewiDB集群架构
 * @method void setTypeName(string $TypeName) 设置KeewiDB标准架构，KeewiDB集群架构
 * @method integer getMinBuyNum() 获取购买时的最小数量
 * @method void setMinBuyNum(integer $MinBuyNum) 设置购买时的最小数量
 * @method integer getMaxBuyNum() 获取购买时的最大数量
 * @method void setMaxBuyNum(integer $MaxBuyNum) 设置购买时的最大数量
 * @method boolean getSaleout() 获取产品是否售罄
 * @method void setSaleout(boolean $Saleout) 设置产品是否售罄
 * @method string getEngine() 获取产品引擎，keewidb
 * @method void setEngine(string $Engine) 设置产品引擎，keewidb
 * @method string getVersion() 获取兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
 * @method void setVersion(string $Version) 设置兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
 * @method array getReplicaNum() 获取副本数量
 * @method void setReplicaNum(array $ReplicaNum) 设置副本数量
 * @method string getPayMode() 获取支持的计费模式，1-包年包月，0-按量计费
 * @method void setPayMode(string $PayMode) 设置支持的计费模式，1-包年包月，0-按量计费
 */
class ProductConf extends AbstractModel
{
    /**
     * @var integer 产品类型，13-KeewiDB标准架构，14-KeewiDB集群架构
     */
    public $Type;

    /**
     * @var string KeewiDB标准架构，KeewiDB集群架构
     */
    public $TypeName;

    /**
     * @var integer 购买时的最小数量
     */
    public $MinBuyNum;

    /**
     * @var integer 购买时的最大数量
     */
    public $MaxBuyNum;

    /**
     * @var boolean 产品是否售罄
     */
    public $Saleout;

    /**
     * @var string 产品引擎，keewidb
     */
    public $Engine;

    /**
     * @var string 兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
     */
    public $Version;

    /**
     * @var array 副本数量
     */
    public $ReplicaNum;

    /**
     * @var string 支持的计费模式，1-包年包月，0-按量计费
     */
    public $PayMode;

    /**
     * @param integer $Type 产品类型，13-KeewiDB标准架构，14-KeewiDB集群架构
     * @param string $TypeName KeewiDB标准架构，KeewiDB集群架构
     * @param integer $MinBuyNum 购买时的最小数量
     * @param integer $MaxBuyNum 购买时的最大数量
     * @param boolean $Saleout 产品是否售罄
     * @param string $Engine 产品引擎，keewidb
     * @param string $Version 兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
     * @param array $ReplicaNum 副本数量
     * @param string $PayMode 支持的计费模式，1-包年包月，0-按量计费
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("MinBuyNum",$param) and $param["MinBuyNum"] !== null) {
            $this->MinBuyNum = $param["MinBuyNum"];
        }

        if (array_key_exists("MaxBuyNum",$param) and $param["MaxBuyNum"] !== null) {
            $this->MaxBuyNum = $param["MaxBuyNum"];
        }

        if (array_key_exists("Saleout",$param) and $param["Saleout"] !== null) {
            $this->Saleout = $param["Saleout"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
