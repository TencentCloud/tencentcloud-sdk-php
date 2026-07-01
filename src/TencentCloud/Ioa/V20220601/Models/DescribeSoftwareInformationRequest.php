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
 * DescribeSoftwareInformation请求参数结构体
 *
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method string getMid() 获取<p>终端唯一标识Mid</p>
 * @method void setMid(string $Mid) 设置<p>终端唯一标识Mid</p>
 * @method Condition getCondition() 获取<p>过滤条件、分页参数</p><li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
 * @method void setCondition(Condition $Condition) 设置<p>过滤条件、分页参数</p><li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
 * @method integer getOsType() 获取<p>0:win 2:mac</p>
 * @method void setOsType(integer $OsType) 设置<p>0:win 2:mac</p>
 */
class DescribeSoftwareInformationRequest extends AbstractModel
{
    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @var string <p>终端唯一标识Mid</p>
     */
    public $Mid;

    /**
     * @var Condition <p>过滤条件、分页参数</p><li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
     */
    public $Condition;

    /**
     * @var integer <p>0:win 2:mac</p>
     */
    public $OsType;

    /**
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     * @param string $Mid <p>终端唯一标识Mid</p>
     * @param Condition $Condition <p>过滤条件、分页参数</p><li>Name - String - 过滤支持：是 - 操作符:eq,like - 排序支持：是 。</li>
     * @param integer $OsType <p>0:win 2:mac</p>
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
        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
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
