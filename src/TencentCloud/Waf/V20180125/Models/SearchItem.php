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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入列表查询复杂条件
 *
 * @method string getClsStatus() 获取日志开关
 * @method void setClsStatus(string $ClsStatus) 设置日志开关
 * @method string getStatus() 获取waf开关
 * @method void setStatus(string $Status) 设置waf开关
 * @method string getFlowMode() 获取流量模式
 * @method void setFlowMode(string $FlowMode) 设置流量模式
 */
class SearchItem extends AbstractModel
{
    /**
     * @var string 日志开关
     */
    public $ClsStatus;

    /**
     * @var string waf开关
     */
    public $Status;

    /**
     * @var string 流量模式
     */
    public $FlowMode;

    /**
     * @param string $ClsStatus 日志开关
     * @param string $Status waf开关
     * @param string $FlowMode 流量模式
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
        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }
    }
}
