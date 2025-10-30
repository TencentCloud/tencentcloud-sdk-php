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
 * CreateLane请求参数结构体
 *
 * @method string getLaneName() 获取泳道配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
 * @method void setLaneName(string $LaneName) 设置泳道配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
 * @method string getRemark() 获取泳道配置备注，最多支持200个字符。
 * @method void setRemark(string $Remark) 设置泳道配置备注，最多支持200个字符。
 * @method array getLaneGroupList() 获取泳道部署组信息。
 * @method void setLaneGroupList(array $LaneGroupList) 设置泳道部署组信息。
 * @method array getProgramIdList() 获取需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 * @method void setProgramIdList(array $ProgramIdList) 设置需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
 */
class CreateLaneRequest extends AbstractModel
{
    /**
     * @var string 泳道配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
     */
    public $LaneName;

    /**
     * @var string 泳道配置备注，最多支持200个字符。
     */
    public $Remark;

    /**
     * @var array 泳道部署组信息。
     */
    public $LaneGroupList;

    /**
     * @var array 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
     */
    public $ProgramIdList;

    /**
     * @param string $LaneName 泳道配置名称，最多支持60个字符，只能包含字母、数字及分隔符（“-”），且不能以分隔符开头或结尾。
     * @param string $Remark 泳道配置备注，最多支持200个字符。
     * @param array $LaneGroupList 泳道部署组信息。
     * @param array $ProgramIdList 需要绑定的数据集ID。该参数可以通过调用 [DescribePrograms](https://cloud.tencent.com/document/product/649/73477) 的返回值中的 ProgramId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/privilege?tab=program&roleId=role-yrle4doy)查看；也可以调用[CreateProgram](https://cloud.tencent.com/document/product/649/108544)创建新的数据集。
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
        if (array_key_exists("LaneName",$param) and $param["LaneName"] !== null) {
            $this->LaneName = $param["LaneName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LaneGroupList",$param) and $param["LaneGroupList"] !== null) {
            $this->LaneGroupList = [];
            foreach ($param["LaneGroupList"] as $key => $value){
                $obj = new LaneGroup();
                $obj->deserialize($value);
                array_push($this->LaneGroupList, $obj);
            }
        }

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }
    }
}
