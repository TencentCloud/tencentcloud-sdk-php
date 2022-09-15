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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterStorage请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getNewStorageLimit() 获取集群新存储大小（单位G）
 * @method void setNewStorageLimit(integer $NewStorageLimit) 设置集群新存储大小（单位G）
 * @method integer getOldStorageLimit() 获取集群原存储大小（单位G）
 * @method void setOldStorageLimit(integer $OldStorageLimit) 设置集群原存储大小（单位G）
 * @method integer getDealMode() 获取交易模式 0-下单并支付 1-下单
 * @method void setDealMode(integer $DealMode) 设置交易模式 0-下单并支付 1-下单
 */
class ModifyClusterStorageRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 集群新存储大小（单位G）
     */
    public $NewStorageLimit;

    /**
     * @var integer 集群原存储大小（单位G）
     */
    public $OldStorageLimit;

    /**
     * @var integer 交易模式 0-下单并支付 1-下单
     */
    public $DealMode;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $NewStorageLimit 集群新存储大小（单位G）
     * @param integer $OldStorageLimit 集群原存储大小（单位G）
     * @param integer $DealMode 交易模式 0-下单并支付 1-下单
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NewStorageLimit",$param) and $param["NewStorageLimit"] !== null) {
            $this->NewStorageLimit = $param["NewStorageLimit"];
        }

        if (array_key_exists("OldStorageLimit",$param) and $param["OldStorageLimit"] !== null) {
            $this->OldStorageLimit = $param["OldStorageLimit"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }
    }
}
