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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险接口情况
 *
 * @method string getActionName() 获取接口名
 * @method void setActionName(string $ActionName) 设置接口名
 * @method string getActionNameCn() 获取接口名中文
 * @method void setActionNameCn(string $ActionNameCn) 设置接口名中文
 * @method integer getInvokeCount() 获取调用次数
 * @method void setInvokeCount(integer $InvokeCount) 设置调用次数
 * @method integer getActionAccessTime() 获取最后访问时间Unix时间单位毫秒
 * @method void setActionAccessTime(integer $ActionAccessTime) 设置最后访问时间Unix时间单位毫秒
 */
class CosRiskActionInfo extends AbstractModel
{
    /**
     * @var string 接口名
     */
    public $ActionName;

    /**
     * @var string 接口名中文
     */
    public $ActionNameCn;

    /**
     * @var integer 调用次数
     */
    public $InvokeCount;

    /**
     * @var integer 最后访问时间Unix时间单位毫秒
     */
    public $ActionAccessTime;

    /**
     * @param string $ActionName 接口名
     * @param string $ActionNameCn 接口名中文
     * @param integer $InvokeCount 调用次数
     * @param integer $ActionAccessTime 最后访问时间Unix时间单位毫秒
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
        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("ActionNameCn",$param) and $param["ActionNameCn"] !== null) {
            $this->ActionNameCn = $param["ActionNameCn"];
        }

        if (array_key_exists("InvokeCount",$param) and $param["InvokeCount"] !== null) {
            $this->InvokeCount = $param["InvokeCount"];
        }

        if (array_key_exists("ActionAccessTime",$param) and $param["ActionAccessTime"] !== null) {
            $this->ActionAccessTime = $param["ActionAccessTime"];
        }
    }
}
