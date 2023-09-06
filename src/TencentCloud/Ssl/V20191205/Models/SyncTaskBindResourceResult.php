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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异步任务证书关联云资源结果
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method array getBindResourceResult() 获取关联云资源结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindResourceResult(array $BindResourceResult) 设置关联云资源结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
 * @method void setStatus(integer $Status) 设置关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
 * @method Error getError() 获取关联云资源错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(Error $Error) 设置关联云资源错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCacheTime() 获取当前结果缓存时间
 * @method void setCacheTime(string $CacheTime) 设置当前结果缓存时间
 */
class SyncTaskBindResourceResult extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var array 关联云资源结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindResourceResult;

    /**
     * @var integer 关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
     */
    public $Status;

    /**
     * @var Error 关联云资源错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var string 当前结果缓存时间
     */
    public $CacheTime;

    /**
     * @param string $TaskId 任务ID
     * @param array $BindResourceResult 关联云资源结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 关联云资源异步查询结果： 0表示查询中， 1表示查询成功。 2表示查询异常； 若状态为1，则查看BindResourceResult结果；若状态为2，则查看Error原因
     * @param Error $Error 关联云资源错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CacheTime 当前结果缓存时间
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

        if (array_key_exists("BindResourceResult",$param) and $param["BindResourceResult"] !== null) {
            $this->BindResourceResult = [];
            foreach ($param["BindResourceResult"] as $key => $value){
                $obj = new BindResourceResult();
                $obj->deserialize($value);
                array_push($this->BindResourceResult, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new Error();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
