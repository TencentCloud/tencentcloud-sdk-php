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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBuildingList请求参数结构体
 *
 * @method string getWorkspaceId() 获取项目空间id
 * @method void setWorkspaceId(string $WorkspaceId) 设置项目空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method boolean getHasModel() 获取是否有模型文件
 * @method void setHasModel(boolean $HasModel) 设置是否有模型文件
 * @method array getSpaceCodes() 获取空间编码
 * @method void setSpaceCodes(array $SpaceCodes) 设置空间编码
 */
class DescribeBuildingListRequest extends AbstractModel
{
    /**
     * @var string 项目空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var boolean 是否有模型文件
     */
    public $HasModel;

    /**
     * @var array 空间编码
     */
    public $SpaceCodes;

    /**
     * @param string $WorkspaceId 项目空间id
     * @param string $ApplicationToken 应用token
     * @param boolean $HasModel 是否有模型文件
     * @param array $SpaceCodes 空间编码
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("HasModel",$param) and $param["HasModel"] !== null) {
            $this->HasModel = $param["HasModel"];
        }

        if (array_key_exists("SpaceCodes",$param) and $param["SpaceCodes"] !== null) {
            $this->SpaceCodes = $param["SpaceCodes"];
        }
    }
}
