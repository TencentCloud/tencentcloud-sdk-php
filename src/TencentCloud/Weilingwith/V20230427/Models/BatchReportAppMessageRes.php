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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量消息上报结果
 *
 * @method integer getTotalElements() 获取上报数量

 * @method void setTotalElements(integer $TotalElements) 设置上报数量

 * @method integer getCommit() 获取提交数量（推送成功）
 * @method void setCommit(integer $Commit) 设置提交数量（推送成功）
 * @method array getSpanMap() 获取消息推送结果列表
 * @method void setSpanMap(array $SpanMap) 设置消息推送结果列表
 */
class BatchReportAppMessageRes extends AbstractModel
{
    /**
     * @var integer 上报数量

     */
    public $TotalElements;

    /**
     * @var integer 提交数量（推送成功）
     */
    public $Commit;

    /**
     * @var array 消息推送结果列表
     */
    public $SpanMap;

    /**
     * @param integer $TotalElements 上报数量

     * @param integer $Commit 提交数量（推送成功）
     * @param array $SpanMap 消息推送结果列表
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
        if (array_key_exists("TotalElements",$param) and $param["TotalElements"] !== null) {
            $this->TotalElements = $param["TotalElements"];
        }

        if (array_key_exists("Commit",$param) and $param["Commit"] !== null) {
            $this->Commit = $param["Commit"];
        }

        if (array_key_exists("SpanMap",$param) and $param["SpanMap"] !== null) {
            $this->SpanMap = [];
            foreach ($param["SpanMap"] as $key => $value){
                $obj = new ReportMsgRes();
                $obj->deserialize($value);
                array_push($this->SpanMap, $obj);
            }
        }
    }
}
