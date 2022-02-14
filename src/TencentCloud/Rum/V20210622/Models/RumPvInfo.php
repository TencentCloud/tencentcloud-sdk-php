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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * rum 日志对象
 *
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getPv() 获取pv访问量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPv(string $Pv) 设置pv访问量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取时间
 * @method void setCreateTime(string $CreateTime) 设置时间
 */
class RumPvInfo extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string pv访问量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pv;

    /**
     * @var string 时间
     */
    public $CreateTime;

    /**
     * @param integer $ProjectId 项目ID
     * @param string $Pv pv访问量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 时间
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Pv",$param) and $param["Pv"] !== null) {
            $this->Pv = $param["Pv"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
