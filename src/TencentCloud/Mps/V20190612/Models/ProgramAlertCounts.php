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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线性组装Program聚合告警信息
 *
 * @method string getProgramId() 获取<p>Program ID。</p>
 * @method void setProgramId(string $ProgramId) 设置<p>Program ID。</p>
 * @method string getProgramName() 获取<p>Program名称。</p>
 * @method void setProgramName(string $ProgramName) 设置<p>Program名称。</p>
 * @method string getCategory() 获取<p>告警分类。</p>
 * @method void setCategory(string $Category) 设置<p>告警分类。</p>
 * @method integer getCount() 获取<p>出现次数</p>
 * @method void setCount(integer $Count) 设置<p>出现次数</p>
 * @method integer getLastModifiedTime() 获取<p>更新时间。</p>
 * @method void setLastModifiedTime(integer $LastModifiedTime) 设置<p>更新时间。</p>
 */
class ProgramAlertCounts extends AbstractModel
{
    /**
     * @var string <p>Program ID。</p>
     */
    public $ProgramId;

    /**
     * @var string <p>Program名称。</p>
     */
    public $ProgramName;

    /**
     * @var string <p>告警分类。</p>
     */
    public $Category;

    /**
     * @var integer <p>出现次数</p>
     */
    public $Count;

    /**
     * @var integer <p>更新时间。</p>
     */
    public $LastModifiedTime;

    /**
     * @param string $ProgramId <p>Program ID。</p>
     * @param string $ProgramName <p>Program名称。</p>
     * @param string $Category <p>告警分类。</p>
     * @param integer $Count <p>出现次数</p>
     * @param integer $LastModifiedTime <p>更新时间。</p>
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
        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }
    }
}
