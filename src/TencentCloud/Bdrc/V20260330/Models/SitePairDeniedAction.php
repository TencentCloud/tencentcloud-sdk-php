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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个容灾策略的禁止操作集合
 *
 * @method string getSitePairId() 获取容灾策略ID
 * @method void setSitePairId(string $SitePairId) 设置容灾策略ID
 * @method array getDeniedActions() 获取该容灾策略当前被禁止执行的操作列表
 * @method void setDeniedActions(array $DeniedActions) 设置该容灾策略当前被禁止执行的操作列表
 */
class SitePairDeniedAction extends AbstractModel
{
    /**
     * @var string 容灾策略ID
     */
    public $SitePairId;

    /**
     * @var array 该容灾策略当前被禁止执行的操作列表
     */
    public $DeniedActions;

    /**
     * @param string $SitePairId 容灾策略ID
     * @param array $DeniedActions 该容灾策略当前被禁止执行的操作列表
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
        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("DeniedActions",$param) and $param["DeniedActions"] !== null) {
            $this->DeniedActions = [];
            foreach ($param["DeniedActions"] as $key => $value){
                $obj = new DeniedAction();
                $obj->deserialize($value);
                array_push($this->DeniedActions, $obj);
            }
        }
    }
}
