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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRansomDefenseStrategyStatus请求参数结构体
 *
 * @method integer getIsAll() 获取是否对全部策略生效: 0否，1是
 * @method void setIsAll(integer $IsAll) 设置是否对全部策略生效: 0否，1是
 * @method integer getStatus() 获取0关闭，1开启，9删除
 * @method void setStatus(integer $Status) 设置0关闭，1开启，9删除
 * @method array getIdList() 获取策略ID列表
 * @method void setIdList(array $IdList) 设置策略ID列表
 */
class ModifyRansomDefenseStrategyStatusRequest extends AbstractModel
{
    /**
     * @var integer 是否对全部策略生效: 0否，1是
     */
    public $IsAll;

    /**
     * @var integer 0关闭，1开启，9删除
     */
    public $Status;

    /**
     * @var array 策略ID列表
     */
    public $IdList;

    /**
     * @param integer $IsAll 是否对全部策略生效: 0否，1是
     * @param integer $Status 0关闭，1开启，9删除
     * @param array $IdList 策略ID列表
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
        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }
    }
}
