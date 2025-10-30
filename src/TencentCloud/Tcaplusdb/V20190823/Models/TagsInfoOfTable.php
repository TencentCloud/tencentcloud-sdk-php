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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格标签信息
 *
 * @method string getTableInstanceId() 获取表格实例ID
 * @method void setTableInstanceId(string $TableInstanceId) 设置表格实例ID
 * @method string getTableName() 获取表格名称
 * @method void setTableName(string $TableName) 设置表格名称
 * @method string getTableGroupId() 获取表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置表格组ID
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 * @method ErrorInfo getError() 获取错误信息
 * @method void setError(ErrorInfo $Error) 设置错误信息
 */
class TagsInfoOfTable extends AbstractModel
{
    /**
     * @var string 表格实例ID
     */
    public $TableInstanceId;

    /**
     * @var string 表格名称
     */
    public $TableName;

    /**
     * @var string 表格组ID
     */
    public $TableGroupId;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @var ErrorInfo 错误信息
     */
    public $Error;

    /**
     * @param string $TableInstanceId 表格实例ID
     * @param string $TableName 表格名称
     * @param string $TableGroupId 表格组ID
     * @param array $Tags 标签信息
     * @param ErrorInfo $Error 错误信息
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
        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }
    }
}
