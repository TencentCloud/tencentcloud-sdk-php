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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作者信息
 *
 * @method string getSubUin() 获取<p>操作者子账号 UIN</p>
 * @method void setSubUin(string $SubUin) 设置<p>操作者子账号 UIN</p>
 * @method string getSubUinName() 获取<p>操作者子账号名称</p>
 * @method void setSubUinName(string $SubUinName) 设置<p>操作者子账号名称</p>
 * @method boolean getIsPlatformOperator() 获取<p>是否为平台操作</p>
 * @method void setIsPlatformOperator(boolean $IsPlatformOperator) 设置<p>是否为平台操作</p>
 * @method string getOperationType() 获取<p>操作类型</p>
 * @method void setOperationType(string $OperationType) 设置<p>操作类型</p>
 */
class OperatorInfo extends AbstractModel
{
    /**
     * @var string <p>操作者子账号 UIN</p>
     */
    public $SubUin;

    /**
     * @var string <p>操作者子账号名称</p>
     */
    public $SubUinName;

    /**
     * @var boolean <p>是否为平台操作</p>
     */
    public $IsPlatformOperator;

    /**
     * @var string <p>操作类型</p>
     */
    public $OperationType;

    /**
     * @param string $SubUin <p>操作者子账号 UIN</p>
     * @param string $SubUinName <p>操作者子账号名称</p>
     * @param boolean $IsPlatformOperator <p>是否为平台操作</p>
     * @param string $OperationType <p>操作类型</p>
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
        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("IsPlatformOperator",$param) and $param["IsPlatformOperator"] !== null) {
            $this->IsPlatformOperator = $param["IsPlatformOperator"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }
    }
}
