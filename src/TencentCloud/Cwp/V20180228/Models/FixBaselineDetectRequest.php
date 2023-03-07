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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FixBaselineDetect请求参数结构体
 *
 * @method string getHostId() 获取主机Id
 * @method void setHostId(string $HostId) 设置主机Id
 * @method integer getItemId() 获取项Id
 * @method void setItemId(integer $ItemId) 设置项Id
 * @method array getData() 获取修复内容
 * @method void setData(array $Data) 设置修复内容
 */
class FixBaselineDetectRequest extends AbstractModel
{
    /**
     * @var string 主机Id
     */
    public $HostId;

    /**
     * @var integer 项Id
     */
    public $ItemId;

    /**
     * @var array 修复内容
     */
    public $Data;

    /**
     * @param string $HostId 主机Id
     * @param integer $ItemId 项Id
     * @param array $Data 修复内容
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
