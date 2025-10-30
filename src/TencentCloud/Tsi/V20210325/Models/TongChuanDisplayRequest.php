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
namespace TencentCloud\Tsi\V20210325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TongChuanDisplay请求参数结构体
 *
 * @method string getSessionUuid() 获取一段完整的语音对应一个SessionUuid
 * @method void setSessionUuid(string $SessionUuid) 设置一段完整的语音对应一个SessionUuid
 * @method integer getIsNew() 获取句子排序方式，1-由新到旧
 * @method void setIsNew(integer $IsNew) 设置句子排序方式，1-由新到旧
 * @method integer getSeMax() 获取最多返回几句，目前只支持 5 条数据
 * @method void setSeMax(integer $SeMax) 设置最多返回几句，目前只支持 5 条数据
 */
class TongChuanDisplayRequest extends AbstractModel
{
    /**
     * @var string 一段完整的语音对应一个SessionUuid
     */
    public $SessionUuid;

    /**
     * @var integer 句子排序方式，1-由新到旧
     */
    public $IsNew;

    /**
     * @var integer 最多返回几句，目前只支持 5 条数据
     */
    public $SeMax;

    /**
     * @param string $SessionUuid 一段完整的语音对应一个SessionUuid
     * @param integer $IsNew 句子排序方式，1-由新到旧
     * @param integer $SeMax 最多返回几句，目前只支持 5 条数据
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
        if (array_key_exists("SessionUuid",$param) and $param["SessionUuid"] !== null) {
            $this->SessionUuid = $param["SessionUuid"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("SeMax",$param) and $param["SeMax"] !== null) {
            $this->SeMax = $param["SeMax"];
        }
    }
}
