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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量迁移源站文件信息。
 *
 * @method IncrementalMigrationOriginPrefixConfig getPrefixConfig() 获取文件前缀配置。
 * @method void setPrefixConfig(IncrementalMigrationOriginPrefixConfig $PrefixConfig) 设置文件前缀配置。
 * @method IncrementalMigrationOriginSuffixConfig getSuffixConfig() 获取文件后缀配置。
 * @method void setSuffixConfig(IncrementalMigrationOriginSuffixConfig $SuffixConfig) 设置文件后缀配置。
 * @method IncrementalMigrationOriginFixedFileConfig getFixedFileConfig() 获取固定文件配置。
 * @method void setFixedFileConfig(IncrementalMigrationOriginFixedFileConfig $FixedFileConfig) 设置固定文件配置。
 */
class IncrementalMigrationOriginFileInfo extends AbstractModel
{
    /**
     * @var IncrementalMigrationOriginPrefixConfig 文件前缀配置。
     */
    public $PrefixConfig;

    /**
     * @var IncrementalMigrationOriginSuffixConfig 文件后缀配置。
     */
    public $SuffixConfig;

    /**
     * @var IncrementalMigrationOriginFixedFileConfig 固定文件配置。
     */
    public $FixedFileConfig;

    /**
     * @param IncrementalMigrationOriginPrefixConfig $PrefixConfig 文件前缀配置。
     * @param IncrementalMigrationOriginSuffixConfig $SuffixConfig 文件后缀配置。
     * @param IncrementalMigrationOriginFixedFileConfig $FixedFileConfig 固定文件配置。
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
        if (array_key_exists("PrefixConfig",$param) and $param["PrefixConfig"] !== null) {
            $this->PrefixConfig = new IncrementalMigrationOriginPrefixConfig();
            $this->PrefixConfig->deserialize($param["PrefixConfig"]);
        }

        if (array_key_exists("SuffixConfig",$param) and $param["SuffixConfig"] !== null) {
            $this->SuffixConfig = new IncrementalMigrationOriginSuffixConfig();
            $this->SuffixConfig->deserialize($param["SuffixConfig"]);
        }

        if (array_key_exists("FixedFileConfig",$param) and $param["FixedFileConfig"] !== null) {
            $this->FixedFileConfig = new IncrementalMigrationOriginFixedFileConfig();
            $this->FixedFileConfig->deserialize($param["FixedFileConfig"]);
        }
    }
}
