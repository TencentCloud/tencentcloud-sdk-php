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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异步按语义搜索媒体任务信息
 *
 * @method string getTaskId() 获取<p>任务ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID。</p>
 * @method string getStatus() 获取<p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
 * @method void setStatus(string $Status) 设置<p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
 * @method integer getErrCode() 获取<p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
 * @method string getErrCodeExt() 获取<p>扩展错误码。</p>
 * @method void setErrCodeExt(string $ErrCodeExt) 设置<p>扩展错误码。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method string getQueryText() 获取<p>本次查询文本（图片查询时为空）。</p>
 * @method void setQueryText(string $QueryText) 设置<p>本次查询文本（图片查询时为空）。</p>
 * @method array getSearchResults() 获取<p>召回列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchResults(array $SearchResults) 设置<p>召回列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchMediaBySemanticsAsync extends AbstractModel
{
    /**
     * @var string <p>任务ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
     */
    public $Status;

    /**
     * @var integer <p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>扩展错误码。</p>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var string <p>本次查询文本（图片查询时为空）。</p>
     */
    public $QueryText;

    /**
     * @var array <p>召回列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchResults;

    /**
     * @param string $TaskId <p>任务ID。</p>
     * @param string $Status <p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
     * @param integer $ErrCode <p>错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。</p>
     * @param string $ErrCodeExt <p>扩展错误码。</p>
     * @param string $Message <p>错误信息。</p>
     * @param string $QueryText <p>本次查询文本（图片查询时为空）。</p>
     * @param array $SearchResults <p>召回列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("QueryText",$param) and $param["QueryText"] !== null) {
            $this->QueryText = $param["QueryText"];
        }

        if (array_key_exists("SearchResults",$param) and $param["SearchResults"] !== null) {
            $this->SearchResults = [];
            foreach ($param["SearchResults"] as $key => $value){
                $obj = new SemanticsSearchResult();
                $obj->deserialize($value);
                array_push($this->SearchResults, $obj);
            }
        }
    }
}
