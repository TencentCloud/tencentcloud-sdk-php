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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelVersionList请求参数结构体
 *
 * @method string getDeviceType() 获取型号类型，只支持传入 netDevice 和 server
 * @method void setDeviceType(string $DeviceType) 设置型号类型，只支持传入 netDevice 和 server
 * @method array getFilters() 获取model-name  型号名称  类型：String  必选：否
 * @method void setFilters(array $Filters) 设置model-name  型号名称  类型：String  必选：否
 * @method boolean getChecked() 获取是否已评估
 * @method void setChecked(boolean $Checked) 设置是否已评估
 * @method integer getCampusId() 获取园区ID，当 Checked 参数传 True 时，该参数必须传值
 * @method void setCampusId(integer $CampusId) 设置园区ID，当 Checked 参数传 True 时，该参数必须传值
 * @method string getModelName() 获取型号关键字，可以实现模糊匹配搜索功能
 * @method void setModelName(string $ModelName) 设置型号关键字，可以实现模糊匹配搜索功能
 */
class DescribeModelVersionListRequest extends AbstractModel
{
    /**
     * @var string 型号类型，只支持传入 netDevice 和 server
     */
    public $DeviceType;

    /**
     * @var array model-name  型号名称  类型：String  必选：否
     */
    public $Filters;

    /**
     * @var boolean 是否已评估
     */
    public $Checked;

    /**
     * @var integer 园区ID，当 Checked 参数传 True 时，该参数必须传值
     */
    public $CampusId;

    /**
     * @var string 型号关键字，可以实现模糊匹配搜索功能
     */
    public $ModelName;

    /**
     * @param string $DeviceType 型号类型，只支持传入 netDevice 和 server
     * @param array $Filters model-name  型号名称  类型：String  必选：否
     * @param boolean $Checked 是否已评估
     * @param integer $CampusId 园区ID，当 Checked 参数传 True 时，该参数必须传值
     * @param string $ModelName 型号关键字，可以实现模糊匹配搜索功能
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Checked",$param) and $param["Checked"] !== null) {
            $this->Checked = $param["Checked"];
        }

        if (array_key_exists("CampusId",$param) and $param["CampusId"] !== null) {
            $this->CampusId = $param["CampusId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }
    }
}
