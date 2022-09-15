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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTraceCode请求参数结构体
 *
 * @method string getCode() 获取二维码
 * @method void setCode(string $Code) 设置二维码
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getStatus() 获取状态 0: 冻结 1: 激活
 * @method void setStatus(integer $Status) 设置状态 0: 冻结 1: 激活
 */
class ModifyTraceCodeRequest extends AbstractModel
{
    /**
     * @var string 二维码
     */
    public $Code;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 状态 0: 冻结 1: 激活
     */
    public $Status;

    /**
     * @param string $Code 二维码
     * @param integer $CorpId 企业ID
     * @param integer $Status 状态 0: 冻结 1: 激活
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
