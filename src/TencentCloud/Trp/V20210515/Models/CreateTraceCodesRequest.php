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
 * CreateTraceCodes请求参数结构体
 *
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method array getCodes() 获取码
 * @method void setCodes(array $Codes) 设置码
 * @method integer getCodeType() 获取码绑定激活策略，默认  0
0: 传什么码就激活什么码
1: 层级码 + 层级子码
 * @method void setCodeType(integer $CodeType) 设置码绑定激活策略，默认  0
0: 传什么码就激活什么码
1: 层级码 + 层级子码
 * @method integer getCheckType() 获取错误检查类型，默认 0
0: 没有新导入码时正常返回
1: 没有新导入码时报错，并返回没有导入成功的原因
 * @method void setCheckType(integer $CheckType) 设置错误检查类型，默认 0
0: 没有新导入码时正常返回
1: 没有新导入码时报错，并返回没有导入成功的原因
 */
class CreateTraceCodesRequest extends AbstractModel
{
    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var array 码
     */
    public $Codes;

    /**
     * @var integer 码绑定激活策略，默认  0
0: 传什么码就激活什么码
1: 层级码 + 层级子码
     */
    public $CodeType;

    /**
     * @var integer 错误检查类型，默认 0
0: 没有新导入码时正常返回
1: 没有新导入码时报错，并返回没有导入成功的原因
     */
    public $CheckType;

    /**
     * @param string $BatchId 批次ID
     * @param integer $CorpId 企业ID
     * @param array $Codes 码
     * @param integer $CodeType 码绑定激活策略，默认  0
0: 传什么码就激活什么码
1: 层级码 + 层级子码
     * @param integer $CheckType 错误检查类型，默认 0
0: 没有新导入码时正常返回
1: 没有新导入码时报错，并返回没有导入成功的原因
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Codes",$param) and $param["Codes"] !== null) {
            $this->Codes = [];
            foreach ($param["Codes"] as $key => $value){
                $obj = new CodeItem();
                $obj->deserialize($value);
                array_push($this->Codes, $obj);
            }
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }
    }
}
