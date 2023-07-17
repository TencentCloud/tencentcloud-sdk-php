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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobSubmissionLog返回参数结构体
 *
 * @method string getCursor() 获取日志搜索的游标，需要搜索更多时透传这个值
 * @method void setCursor(string $Cursor) 设置日志搜索的游标，需要搜索更多时透传这个值
 * @method boolean getListOver() 获取是否返回了所有的日志记录
 * @method void setListOver(boolean $ListOver) 设置是否返回了所有的日志记录
 * @method string getJobRequestId() 获取作业启动的requestId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobRequestId(string $JobRequestId) 设置作业启动的requestId
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getJobInstanceList() 获取该时间段内符合关键字的所有的作业实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobInstanceList(array $JobInstanceList) 设置该时间段内符合关键字的所有的作业实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogList() 获取废弃，请使用LogContentList
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogList(array $LogList) 设置废弃，请使用LogContentList
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogContentList() 获取日志列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogContentList(array $LogContentList) 设置日志列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobSubmissionLogResponse extends AbstractModel
{
    /**
     * @var string 日志搜索的游标，需要搜索更多时透传这个值
     */
    public $Cursor;

    /**
     * @var boolean 是否返回了所有的日志记录
     */
    public $ListOver;

    /**
     * @var string 作业启动的requestId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobRequestId;

    /**
     * @var array 该时间段内符合关键字的所有的作业实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobInstanceList;

    /**
     * @var array 废弃，请使用LogContentList
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogList;

    /**
     * @var array 日志列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogContentList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Cursor 日志搜索的游标，需要搜索更多时透传这个值
     * @param boolean $ListOver 是否返回了所有的日志记录
     * @param string $JobRequestId 作业启动的requestId
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $JobInstanceList 该时间段内符合关键字的所有的作业实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogList 废弃，请使用LogContentList
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogContentList 日志列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("JobRequestId",$param) and $param["JobRequestId"] !== null) {
            $this->JobRequestId = $param["JobRequestId"];
        }

        if (array_key_exists("JobInstanceList",$param) and $param["JobInstanceList"] !== null) {
            $this->JobInstanceList = [];
            foreach ($param["JobInstanceList"] as $key => $value){
                $obj = new JobInstanceForSubmissionLog();
                $obj->deserialize($value);
                array_push($this->JobInstanceList, $obj);
            }
        }

        if (array_key_exists("LogList",$param) and $param["LogList"] !== null) {
            $this->LogList = $param["LogList"];
        }

        if (array_key_exists("LogContentList",$param) and $param["LogContentList"] !== null) {
            $this->LogContentList = [];
            foreach ($param["LogContentList"] as $key => $value){
                $obj = new LogContent();
                $obj->deserialize($value);
                array_push($this->LogContentList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
