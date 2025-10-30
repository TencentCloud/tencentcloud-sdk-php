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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAsrKeyWordLibList请求参数结构体
 *
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method array getSpecifyNames() 获取词库名称或者UIN检索
 * @method void setSpecifyNames(array $SpecifyNames) 设置词库名称或者UIN检索
 * @method boolean getOnlySelf() 获取只看用户自己创建的
 * @method void setOnlySelf(boolean $OnlySelf) 设置只看用户自己创建的
 */
class GetAsrKeyWordLibListRequest extends AbstractModel
{
    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var array 词库名称或者UIN检索
     */
    public $SpecifyNames;

    /**
     * @var boolean 只看用户自己创建的
     */
    public $OnlySelf;

    /**
     * @param integer $Offset 分页Offset
     * @param integer $Limit 分页Limit
     * @param array $SpecifyNames 词库名称或者UIN检索
     * @param boolean $OnlySelf 只看用户自己创建的
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SpecifyNames",$param) and $param["SpecifyNames"] !== null) {
            $this->SpecifyNames = $param["SpecifyNames"];
        }

        if (array_key_exists("OnlySelf",$param) and $param["OnlySelf"] !== null) {
            $this->OnlySelf = $param["OnlySelf"];
        }
    }
}
