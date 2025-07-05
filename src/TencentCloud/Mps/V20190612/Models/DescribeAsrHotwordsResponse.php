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
 * DescribeAsrHotwords返回参数结构体
 *
 * @method string getHotwordsId() 获取需要查询的热词库 id
 * @method void setHotwordsId(string $HotwordsId) 设置需要查询的热词库 id
 * @method integer getStatus() 获取当前热词库 id 状态，为 0 表示查询的时刻，没有模板绑定这个热词库，可以删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置当前热词库 id 状态，为 0 表示查询的时刻，没有模板绑定这个热词库，可以删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取热词库的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置热词库的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取临时热词库为 0，返回创建时候的字符串
文件热词库为 1，返回创建是上传的文件内容


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置临时热词库为 0，返回创建时候的字符串
文件热词库为 1，返回创建是上传的文件内容


注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHotWords() 获取查询返回的热词库列表
 * @method void setHotWords(array $HotWords) 设置查询返回的热词库列表
 * @method string getContent() 获取热词库文本，根据 Type 区分
如果 Type 为 0，是热词库字符串
如果 Type 是 1，是热词库文本文件的文件内容 base64 编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置热词库文本，根据 Type 区分
如果 Type 为 0，是热词库字符串
如果 Type 是 1，是热词库文本文件的文件内容 base64 编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWordCount() 获取当前热词库包含的词语数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordCount(integer $WordCount) 设置当前热词库包含的词语数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取分页偏移量，默认值：0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimit() 获取返回记录条数，默认值：10，最大值：100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10，最大值：100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取热词库创建时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置热词库创建时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取热词库修改时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置热词库修改时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAsrHotwordsResponse extends AbstractModel
{
    /**
     * @var string 需要查询的热词库 id
     */
    public $HotwordsId;

    /**
     * @var integer 当前热词库 id 状态，为 0 表示查询的时刻，没有模板绑定这个热词库，可以删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 热词库的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 临时热词库为 0，返回创建时候的字符串
文件热词库为 1，返回创建是上传的文件内容


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var array 查询返回的热词库列表
     */
    public $HotWords;

    /**
     * @var string 热词库文本，根据 Type 区分
如果 Type 为 0，是热词库字符串
如果 Type 是 1，是热词库文本文件的文件内容 base64 编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer 当前热词库包含的词语数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordCount;

    /**
     * @var integer 分页偏移量，默认值：0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：10，最大值：100。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limit;

    /**
     * @var string 热词库创建时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 热词库修改时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $HotwordsId 需要查询的热词库 id
     * @param integer $Status 当前热词库 id 状态，为 0 表示查询的时刻，没有模板绑定这个热词库，可以删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 热词库的名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 临时热词库为 0，返回创建时候的字符串
文件热词库为 1，返回创建是上传的文件内容


注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 热词文件上传时的文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HotWords 查询返回的热词库列表
     * @param string $Content 热词库文本，根据 Type 区分
如果 Type 为 0，是热词库字符串
如果 Type 是 1，是热词库文本文件的文件内容 base64 编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WordCount 当前热词库包含的词语数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset 分页偏移量，默认值：0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Limit 返回记录条数，默认值：10，最大值：100。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 热词库创建时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 热词库修改时间 ISOUTC 格式 "2006-01-02T15:04:05Z"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("HotWords",$param) and $param["HotWords"] !== null) {
            $this->HotWords = [];
            foreach ($param["HotWords"] as $key => $value){
                $obj = new AsrHotwordsSetItem();
                $obj->deserialize($value);
                array_push($this->HotWords, $obj);
            }
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("WordCount",$param) and $param["WordCount"] !== null) {
            $this->WordCount = $param["WordCount"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
