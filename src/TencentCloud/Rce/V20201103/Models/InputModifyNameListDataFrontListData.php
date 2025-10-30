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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改黑白名单数据入参
 *
 * @method array getDataList() 获取名单数据集合
 * @method void setDataList(array $DataList) 设置名单数据集合
 */
class InputModifyNameListDataFrontListData extends AbstractModel
{
    /**
     * @var array 名单数据集合
     */
    public $DataList;

    /**
     * @param array $DataList 名单数据集合
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
        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new InputModifyNameListDataFront();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
