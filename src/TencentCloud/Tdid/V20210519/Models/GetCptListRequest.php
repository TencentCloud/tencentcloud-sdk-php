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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCptList请求参数结构体
 *
 * @method integer getDisplayStart() 获取起始位置
 * @method void setDisplayStart(integer $DisplayStart) 设置起始位置
 * @method integer getDisplayLength() 获取长度
 * @method void setDisplayLength(integer $DisplayLength) 设置长度
 * @method integer getCptType() 获取模板类型，0: 所有模板，1: 系统模板，2: 用户模板，3:普通模板
 * @method void setCptType(integer $CptType) 设置模板类型，0: 所有模板，1: 系统模板，2: 用户模板，3:普通模板
 */
class GetCptListRequest extends AbstractModel
{
    /**
     * @var integer 起始位置
     */
    public $DisplayStart;

    /**
     * @var integer 长度
     */
    public $DisplayLength;

    /**
     * @var integer 模板类型，0: 所有模板，1: 系统模板，2: 用户模板，3:普通模板
     */
    public $CptType;

    /**
     * @param integer $DisplayStart 起始位置
     * @param integer $DisplayLength 长度
     * @param integer $CptType 模板类型，0: 所有模板，1: 系统模板，2: 用户模板，3:普通模板
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
        if (array_key_exists("DisplayStart",$param) and $param["DisplayStart"] !== null) {
            $this->DisplayStart = $param["DisplayStart"];
        }

        if (array_key_exists("DisplayLength",$param) and $param["DisplayLength"] !== null) {
            $this->DisplayLength = $param["DisplayLength"];
        }

        if (array_key_exists("CptType",$param) and $param["CptType"] !== null) {
            $this->CptType = $param["CptType"];
        }
    }
}
