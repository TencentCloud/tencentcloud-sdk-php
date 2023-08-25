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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产报告页面-用户查询入参
 *
 * @method string getDataSourceType() 获取数据源类型
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
 * @method array getDataSourceInfo() 获取数据源信息
 * @method void setDataSourceInfo(array $DataSourceInfo) 设置数据源信息
 */
class AssetList extends AbstractModel
{
    /**
     * @var string 数据源类型
     */
    public $DataSourceType;

    /**
     * @var array 数据源信息
     */
    public $DataSourceInfo;

    /**
     * @param string $DataSourceType 数据源类型
     * @param array $DataSourceInfo 数据源信息
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
        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("DataSourceInfo",$param) and $param["DataSourceInfo"] !== null) {
            $this->DataSourceInfo = [];
            foreach ($param["DataSourceInfo"] as $key => $value){
                $obj = new DataSourceInfo();
                $obj->deserialize($value);
                array_push($this->DataSourceInfo, $obj);
            }
        }
    }
}
