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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token用量统计结果
 *
 * @method array getDataList() 获取<p>Token用量明细返回结果列表</p>
 * @method void setDataList(array $DataList) 设置<p>Token用量明细返回结果列表</p>
 * @method integer getTotalCount() 获取<p>结果总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>结果总数</p>
 */
class AIGWLLMTokenUsageListResult extends AbstractModel
{
    /**
     * @var array <p>Token用量明细返回结果列表</p>
     */
    public $DataList;

    /**
     * @var integer <p>结果总数</p>
     */
    public $TotalCount;

    /**
     * @param array $DataList <p>Token用量明细返回结果列表</p>
     * @param integer $TotalCount <p>结果总数</p>
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
        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new AIGWLLMTokenUsageItem();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
