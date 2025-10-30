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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportSoftwareInformationList请求参数结构体
 *
 * @method string getMid() 获取终端唯一标识Mid
 * @method void setMid(string $Mid) 设置终端唯一标识Mid
 * @method Condition getCondition() 获取过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
 * @method void setCondition(Condition $Condition) 设置过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
 * @method integer getOsType() 获取系统类型0:win 2:mac
 * @method void setOsType(integer $OsType) 设置系统类型0:win 2:mac
 */
class ExportSoftwareInformationListRequest extends AbstractModel
{
    /**
     * @var string 终端唯一标识Mid
     */
    public $Mid;

    /**
     * @var Condition 过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
     */
    public $Condition;

    /**
     * @var integer 系统类型0:win 2:mac
     */
    public $OsType;

    /**
     * @param string $Mid 终端唯一标识Mid
     * @param Condition $Condition 过滤条件、分页参数
<li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
     * @param integer $OsType 系统类型0:win 2:mac
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
        if (array_key_exists("Mid",$param) and $param["Mid"] !== null) {
            $this->Mid = $param["Mid"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }
    }
}
