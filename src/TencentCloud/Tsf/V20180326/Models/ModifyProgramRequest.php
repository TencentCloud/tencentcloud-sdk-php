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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProgram请求参数结构体
 *
 * @method string getProgramId() 获取数据集ID，调用[DescribePrograms](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program)查询接口会返回数据集信息，包括programId
 * @method void setProgramId(string $ProgramId) 设置数据集ID，调用[DescribePrograms](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program)查询接口会返回数据集信息，包括programId
 * @method string getProgramName() 获取数据集名称，不传入时不更新
 * @method void setProgramName(string $ProgramName) 设置数据集名称，不传入时不更新
 * @method string getProgramDesc() 获取数据集描述，不传入时不更新
 * @method void setProgramDesc(string $ProgramDesc) 设置数据集描述，不传入时不更新
 * @method array getProgramItemList() 获取数据项列表，传入null不更新，传入空数组全量删除
 * @method void setProgramItemList(array $ProgramItemList) 设置数据项列表，传入null不更新，传入空数组全量删除
 * @method boolean getEmptyProgramItemList() 获取ProgramItemList是否是空数组
 * @method void setEmptyProgramItemList(boolean $EmptyProgramItemList) 设置ProgramItemList是否是空数组
 */
class ModifyProgramRequest extends AbstractModel
{
    /**
     * @var string 数据集ID，调用[DescribePrograms](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program)查询接口会返回数据集信息，包括programId
     */
    public $ProgramId;

    /**
     * @var string 数据集名称，不传入时不更新
     */
    public $ProgramName;

    /**
     * @var string 数据集描述，不传入时不更新
     */
    public $ProgramDesc;

    /**
     * @var array 数据项列表，传入null不更新，传入空数组全量删除
     */
    public $ProgramItemList;

    /**
     * @var boolean ProgramItemList是否是空数组
     */
    public $EmptyProgramItemList;

    /**
     * @param string $ProgramId 数据集ID，调用[DescribePrograms](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program)查询接口会返回数据集信息，包括programId
     * @param string $ProgramName 数据集名称，不传入时不更新
     * @param string $ProgramDesc 数据集描述，不传入时不更新
     * @param array $ProgramItemList 数据项列表，传入null不更新，传入空数组全量删除
     * @param boolean $EmptyProgramItemList ProgramItemList是否是空数组
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

        if (array_key_exists("ProgramDesc",$param) and $param["ProgramDesc"] !== null) {
            $this->ProgramDesc = $param["ProgramDesc"];
        }

        if (array_key_exists("ProgramItemList",$param) and $param["ProgramItemList"] !== null) {
            $this->ProgramItemList = [];
            foreach ($param["ProgramItemList"] as $key => $value){
                $obj = new ProgramItem();
                $obj->deserialize($value);
                array_push($this->ProgramItemList, $obj);
            }
        }

        if (array_key_exists("EmptyProgramItemList",$param) and $param["EmptyProgramItemList"] !== null) {
            $this->EmptyProgramItemList = $param["EmptyProgramItemList"];
        }
    }
}
