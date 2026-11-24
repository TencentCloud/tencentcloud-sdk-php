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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用审计信息（创建/修改人 + 时间）
 *
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getCreator() 获取<p>创建人</p>
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
 * @method string getCreatorName() 获取<p>创建人姓名</p>
 * @method void setCreatorName(string $CreatorName) 设置<p>创建人姓名</p>
 * @method string getOperator() 获取<p>最近修改人</p>
 * @method void setOperator(string $Operator) 设置<p>最近修改人</p>
 * @method string getOperatorName() 获取<p>最近修改人姓名</p>
 * @method void setOperatorName(string $OperatorName) 设置<p>最近修改人姓名</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class Audit extends AbstractModel
{
    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>创建人</p>
     */
    public $Creator;

    /**
     * @var string <p>创建人姓名</p>
     */
    public $CreatorName;

    /**
     * @var string <p>最近修改人</p>
     */
    public $Operator;

    /**
     * @var string <p>最近修改人姓名</p>
     */
    public $OperatorName;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $CreateTime <p>创建时间</p>
     * @param string $Creator <p>创建人</p>
     * @param string $CreatorName <p>创建人姓名</p>
     * @param string $Operator <p>最近修改人</p>
     * @param string $OperatorName <p>最近修改人姓名</p>
     * @param string $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
