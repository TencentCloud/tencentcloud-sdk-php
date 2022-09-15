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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDataset请求参数结构体
 *
 * @method string getDatasetId() 获取数据集id
 * @method void setDatasetId(string $DatasetId) 设置数据集id
 * @method boolean getDeleteLabelEnable() 获取是否删除cos标签文件
 * @method void setDeleteLabelEnable(boolean $DeleteLabelEnable) 设置是否删除cos标签文件
 */
class DeleteDatasetRequest extends AbstractModel
{
    /**
     * @var string 数据集id
     */
    public $DatasetId;

    /**
     * @var boolean 是否删除cos标签文件
     */
    public $DeleteLabelEnable;

    /**
     * @param string $DatasetId 数据集id
     * @param boolean $DeleteLabelEnable 是否删除cos标签文件
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            $this->DatasetId = $param["DatasetId"];
        }

        if (array_key_exists("DeleteLabelEnable",$param) and $param["DeleteLabelEnable"] !== null) {
            $this->DeleteLabelEnable = $param["DeleteLabelEnable"];
        }
    }
}
