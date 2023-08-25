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
 * dsgc-资产梳理报表-数据源信息
 *
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method array getBindList() 获取针对rbd-就是绑定的db_name
 * @method void setBindList(array $BindList) 设置针对rbd-就是绑定的db_name
 */
class DataSourceInfo extends AbstractModel
{
    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var array 针对rbd-就是绑定的db_name
     */
    public $BindList;

    /**
     * @param string $DataSourceId 数据源ID
     * @param array $BindList 针对rbd-就是绑定的db_name
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("BindList",$param) and $param["BindList"] !== null) {
            $this->BindList = $param["BindList"];
        }
    }
}
