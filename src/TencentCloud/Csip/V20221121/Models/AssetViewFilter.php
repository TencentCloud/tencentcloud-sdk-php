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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产搜索视图
 *
 * @method integer getViewID() 获取<p>视图ID</p>
 * @method void setViewID(integer $ViewID) 设置<p>视图ID</p>
 * @method string getViewName() 获取<p>视图名称</p>
 * @method void setViewName(string $ViewName) 设置<p>视图名称</p>
 * @method array getFilters() 获取<p>视图过滤项</p>
 * @method void setFilters(array $Filters) 设置<p>视图过滤项</p>
 */
class AssetViewFilter extends AbstractModel
{
    /**
     * @var integer <p>视图ID</p>
     */
    public $ViewID;

    /**
     * @var string <p>视图名称</p>
     */
    public $ViewName;

    /**
     * @var array <p>视图过滤项</p>
     */
    public $Filters;

    /**
     * @param integer $ViewID <p>视图ID</p>
     * @param string $ViewName <p>视图名称</p>
     * @param array $Filters <p>视图过滤项</p>
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
        if (array_key_exists("ViewID",$param) and $param["ViewID"] !== null) {
            $this->ViewID = $param["ViewID"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
