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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量索引操作的逐项结果，用于 DeleteIndex（批量删除）和 ModifyIndexStatus（批量关闭/打开索引）的返回值。
 *
 * @method string getIndexName() 获取<p>索引名</p>
 * @method void setIndexName(string $IndexName) 设置<p>索引名</p>
 * @method boolean getSuccess() 获取<p>该项是否成功</p>
 * @method void setSuccess(boolean $Success) 设置<p>该项是否成功</p>
 * @method integer getErrCode() 获取<p>失败时的错误码，成功时不返回</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>失败时的错误码，成功时不返回</p>
 * @method string getErrMsg() 获取<p>失败时的错误信息，成功时不返回</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>失败时的错误信息，成功时不返回</p>
 */
class BatchIndexResult extends AbstractModel
{
    /**
     * @var string <p>索引名</p>
     */
    public $IndexName;

    /**
     * @var boolean <p>该项是否成功</p>
     */
    public $Success;

    /**
     * @var integer <p>失败时的错误码，成功时不返回</p>
     */
    public $ErrCode;

    /**
     * @var string <p>失败时的错误信息，成功时不返回</p>
     */
    public $ErrMsg;

    /**
     * @param string $IndexName <p>索引名</p>
     * @param boolean $Success <p>该项是否成功</p>
     * @param integer $ErrCode <p>失败时的错误码，成功时不返回</p>
     * @param string $ErrMsg <p>失败时的错误信息，成功时不返回</p>
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
        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
