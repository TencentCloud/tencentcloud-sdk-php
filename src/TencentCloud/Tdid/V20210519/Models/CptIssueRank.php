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
 * 模板颁发量排名
 *
 * @method string getCptName() 获取模板名称
 * @method void setCptName(string $CptName) 设置模板名称
 * @method integer getRank() 获取名次
 * @method void setRank(integer $Rank) 设置名次
 * @method integer getCount() 获取颁发量
 * @method void setCount(integer $Count) 设置颁发量
 * @method string getApplyName() 获取应用名称
 * @method void setApplyName(string $ApplyName) 设置应用名称
 * @method integer getApplyId() 获取应用ID
 * @method void setApplyId(integer $ApplyId) 设置应用ID
 */
class CptIssueRank extends AbstractModel
{
    /**
     * @var string 模板名称
     */
    public $CptName;

    /**
     * @var integer 名次
     */
    public $Rank;

    /**
     * @var integer 颁发量
     */
    public $Count;

    /**
     * @var string 应用名称
     */
    public $ApplyName;

    /**
     * @var integer 应用ID
     */
    public $ApplyId;

    /**
     * @param string $CptName 模板名称
     * @param integer $Rank 名次
     * @param integer $Count 颁发量
     * @param string $ApplyName 应用名称
     * @param integer $ApplyId 应用ID
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
        if (array_key_exists("CptName",$param) and $param["CptName"] !== null) {
            $this->CptName = $param["CptName"];
        }

        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ApplyName",$param) and $param["ApplyName"] !== null) {
            $this->ApplyName = $param["ApplyName"];
        }

        if (array_key_exists("ApplyId",$param) and $param["ApplyId"] !== null) {
            $this->ApplyId = $param["ApplyId"];
        }
    }
}
