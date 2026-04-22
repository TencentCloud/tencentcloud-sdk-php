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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同备注
 *
 * @method integer getRemarkId() 获取<p>合同备注下标，对应最多5个备注位</p><p>取值范围：[0, 4]</p>
 * @method void setRemarkId(integer $RemarkId) 设置<p>合同备注下标，对应最多5个备注位</p><p>取值范围：[0, 4]</p>
 * @method string getRemarkValue() 获取<p>合同备注内容，不超过 50 个字符，DELETE 时无需传入</p>
 * @method void setRemarkValue(string $RemarkValue) 设置<p>合同备注内容，不超过 50 个字符，DELETE 时无需传入</p>
 */
class FlowRemarkItem extends AbstractModel
{
    /**
     * @var integer <p>合同备注下标，对应最多5个备注位</p><p>取值范围：[0, 4]</p>
     */
    public $RemarkId;

    /**
     * @var string <p>合同备注内容，不超过 50 个字符，DELETE 时无需传入</p>
     */
    public $RemarkValue;

    /**
     * @param integer $RemarkId <p>合同备注下标，对应最多5个备注位</p><p>取值范围：[0, 4]</p>
     * @param string $RemarkValue <p>合同备注内容，不超过 50 个字符，DELETE 时无需传入</p>
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
        if (array_key_exists("RemarkId",$param) and $param["RemarkId"] !== null) {
            $this->RemarkId = $param["RemarkId"];
        }

        if (array_key_exists("RemarkValue",$param) and $param["RemarkValue"] !== null) {
            $this->RemarkValue = $param["RemarkValue"];
        }
    }
}
