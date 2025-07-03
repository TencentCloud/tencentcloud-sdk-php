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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库列表
 *
 * @method integer getTotalCount() 获取总记录数
 * @method void setTotalCount(integer $TotalCount) 设置总记录数
 * @method string getServer() 获取镜像服务器地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServer(string $Server) 设置镜像服务器地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContent() 获取列表信息
 * @method void setContent(array $Content) 设置列表信息
 */
class ImageRepositoryResult extends AbstractModel
{
    /**
     * @var integer 总记录数
     */
    public $TotalCount;

    /**
     * @var string 镜像服务器地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Server;

    /**
     * @var array 列表信息
     */
    public $Content;

    /**
     * @param integer $TotalCount 总记录数
     * @param string $Server 镜像服务器地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Content 列表信息
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new ImageRepository();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }
    }
}
