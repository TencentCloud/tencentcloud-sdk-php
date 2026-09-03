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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BreakStandbyDBInstanceRelation请求参数结构体
 *
 * @method string getInstanceId() 获取备实例 ID
 * @method void setInstanceId(string $InstanceId) 设置备实例 ID
 * @method boolean getIsForce() 获取是否强制断开
 * @method void setIsForce(boolean $IsForce) 设置是否强制断开
 * @method integer getSyncDelay() 获取 时延，单位是秒,0不检查
 * @method void setSyncDelay(integer $SyncDelay) 设置 时延，单位是秒,0不检查
 */
class BreakStandbyDBInstanceRelationRequest extends AbstractModel
{
    /**
     * @var string 备实例 ID
     */
    public $InstanceId;

    /**
     * @var boolean 是否强制断开
     */
    public $IsForce;

    /**
     * @var integer  时延，单位是秒,0不检查
     */
    public $SyncDelay;

    /**
     * @param string $InstanceId 备实例 ID
     * @param boolean $IsForce 是否强制断开
     * @param integer $SyncDelay  时延，单位是秒,0不检查
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IsForce",$param) and $param["IsForce"] !== null) {
            $this->IsForce = $param["IsForce"];
        }

        if (array_key_exists("SyncDelay",$param) and $param["SyncDelay"] !== null) {
            $this->SyncDelay = $param["SyncDelay"];
        }
    }
}
